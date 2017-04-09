<?php


    $date = $pdo->prepare("SELECT * FROM roomCategory ORDER By price");
    $date->execute();

    $roomCategory = $date->fetchAll(PDO::FETCH_ASSOC);

    // dd($roomCategory);

    // foreach ($roomCategory as $room) {
    //     echo $room['price'];
    // }

	require 'view/home.php';
