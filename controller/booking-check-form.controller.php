<?php

session_start();
// Date Format : 2017-04-04

    // if REQUEST_METHOD Post then save the Room ID
    if ($_SERVER['REQUEST_METHOD'] == POST) {
        $id = $_POST['categoryId'];
        $_SESSION['categoryId'] = $id;
    }


    if ($_SERVER['REQUEST_METHOD'] == GET) {
        $id = $_SESSION['categoryId'];
        $checkIn = $_GET['checkin'];
        $checkOut = $_GET['checkout'];

		//Saved In session
        $_SESSION['checkIn'] = $checkIn;
        $_SESSION['checkOut'] = $checkOut;


        // Get the room id that is  booked in request date
        $totalRoom = $pdo->prepare('SELECT roomBooking.roomId
                        FROM roomBooking
    					JOIN booking
    					ON roomBooking.bookingId = booking.id
    					WHERE roomId IN
    				    (
    				        SELECT roomId FROM roo
    				        where
    				            (checkIn BETWEEN :checkIn AND :checkOut)
    				                        OR
    				            (checkOut BETWEEN :checkIn AND :checkOut)
    				    )

    	');
    	$totalRoom->bindParam(':checkIn', $checkIn, PDO::PARAM_STR);
    	$totalRoom->bindParam(':checkOut', $checkOut, PDO::PARAM_STR);
    	$totalRoom->execute();
        $results = $totalRoom->fetchAll(PDO::FETCH_ASSOC);




        // Making roomid a simple array
        $roomNo = [];
        foreach ($results as $result) {
            $roomNo[] = $result['roomId'];
        }
        $inQuery = implode(',', array_fill(0, count($roomNo), '?'));

		$_SESSION['roomNo'] = $roomNo;


        // Get total vacent room
        if(!empty($roomNo)) {
            $totalRoom = $pdo->prepare('SELECT COUNT(*)
                    FROM room
                    WHERE categoryId = ?
                    AND
                    id NOT IN (' . $inQuery . ')
                ');

            $totalRoom->bindParam(1, $id, PDO::PARAM_INT);
            foreach ($roomNo as $key => $value) {
            $totalRoom->bindValue(($key+2), $value);
            }

            $totalRoom->execute();
            $totalRoom = $totalRoom->fetchAll();
            $totalRoom = $totalRoom[0]['COUNT(*)'];
        }


        //For First Database Entry set total room no:
        if (empty($roomNo)) {
            if ($id == 1) {
                $totalRoom = 5;
            } elseif ($id == 2) {
                $totalRoom = 3;
            } else {
                $totalRoom = 2;
            }
        }
        
        // Get Room Category, Price
        $roomCategory = $pdo->prepare('SELECT * FROM roomCategory WHERE id = :id');
        $roomCategory->execute(['id' => $id]);
        $roomCategory = $roomCategory->fetchAll(PDO::FETCH_ASSOC);



    }

    require 'view/booking-check-form.php';
