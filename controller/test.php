<?php

$email = 'rasel@gmail.com';

// Get Inserted Customer ID:
$customerId = $pdo->prepare('SELECT id from customer WHERE email = :email');
$customerId->execute(['email' => $email]);
$customerId = $customerId->fetchAll();
$customerId = $customerId[0]['id'];

// echo $customerId;

// Got Inserted Booking ID:
$bookingId = $pdo->prepare('SELECT id from booking WHERE userId = :customerId');
$bookingId->execute(['customerId' => $customerId]);
$bookingId = $bookingId->fetchAll();
$bookingId = $bookingId[0]['id'];

echo $bookingId;
