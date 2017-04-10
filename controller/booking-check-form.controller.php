<?php

// Date Format : 2017-04-04

    // if REQUEST_METHOD Post then save the Room ID
    if ($_SERVER['REQUEST_METHOD'] == POST) {
        $id = $_POST['categoryId'];
        setcookie('id', $id, time() + (86400 * 30), "/");
    }


    if ($_SERVER['REQUEST_METHOD'] == GET) {
        $id = $_COOKIE[id];
        setcookie("id", "", time() - 3600);
        $checkIn = $_GET['checkin'];
        $checkOut = $_GET['checkout'];

        // Get the room id that is not booked in request date
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

        $roomNo = [];

        foreach ($results as $result) {
            $roomNo[] = $result['roomId'];
        }

        $roomNo = implode(',', $roomNo);


        // $in = join(',', array_fill(0, count($roomNo), '?'));

        // dd($in);

        // Get total vacent room
        $totalRoom = $pdo->prepare('SELECT COUNT(*)
                                        FROM room
                                        WHERE categoryId = :id
                                        AND
                                        id NOT IN (:roomArray)
                                    ');


        $totalRoom->execute(['id' => $id, 'roomArray' => $roomNo]);
        $totalRoom = $totalRoom->fetchAll();
        $totalRoom = $totalRoom[0]['COUNT(*)'];

        // Get Room Category, Price
        $roomCategory = $pdo->prepare('SELECT * FROM roomCategory WHERE id = :id');
        $roomCategory->execute(['id' => $id]);
        $roomCategory = $roomCategory->fetchAll(PDO::FETCH_ASSOC);

        // dd($totalRoom);



    }





    require 'view/booking-check-form.php';
