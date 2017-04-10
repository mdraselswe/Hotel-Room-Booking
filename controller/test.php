<?php


    $roomCategory = $pdo->prepare('SELECT *
                                    FROM room
                                    WHERE categoryId = :id
                                    AND
                                    id NOT IN () 
                                ');
    $roomCategory->execute(['id' => 2]);
    $roomCategory = $roomCategory->fetchAll(PDO::FETCH_ASSOC);

    dd($roomCategory);






	// $checkIn = '2017-04-10';
	// $checkOut = '2017-04-13';
	//
	// $pdo = $pdo->prepare('SELECT roomBooking.roomId FROM roomBooking
	// 				JOIN booking
	// 				ON roomBooking.bookingId = booking.id
	// 				WHERE roomId NOT IN
	// 			    (
	// 			        SELECT roomId FROM roo
	// 			        where
	// 			            (checkIn BETWEEN :checkIn AND :checkOut)
	// 			            OR
	// 			            (checkOut BETWEEN :checkIn AND :checkOut)
	// 			    )
	//
	// ');
	// $pdo->bindParam(':checkIn', $checkIn, PDO::PARAM_STR);
	// $pdo->bindParam(':checkOut', $checkOut, PDO::PARAM_STR);
	// $pdo->execute();
	// dd($pdo->fetchAll());
