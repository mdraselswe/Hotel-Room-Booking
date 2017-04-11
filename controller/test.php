<?php

session_start();

$checkIn =$_SESSION['checkIn'];
$checkOut = $_SESSION['checkOut'];



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
