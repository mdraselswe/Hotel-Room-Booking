<?php

    $roomCategory = $_POST['roomCategory'];
    $price = $_POST['price'];
    $totalRoom = $_POST['roomQuantity'];

    $totalPrice = $price * $totalRoom;


    require 'view/booking-user-form.php';
