<?php
session_start();

	// Getting All values
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$roomCategory = $_POST['roomCategory'];
	$price = $_POST['price'];
	$totalRoom = $_POST['totalRoom'];
	$totalPrice = $_POST['totalPrice'];

	$id = $_SESSION['categoryId'];
	$checkIn = $_SESSION['checkIn'];
	$checkOut = $_SESSION['checkOut'];


	// Insert into Customer Table
	$insertCustomer = $pdo->prepare('insert into customer (fname, lname, email, phone, address)
				values (:firstname, :lastname, :email, :phone, :address)');
    $insertCustomer->execute([
		'firstname' => $firstname,
		'lastname' => $lastname,
		'email' => $email,
		'phone' => $phone,
		'address' => $address,
	]);

	// Get Inserted Customer ID:
	$customerId = $pdo->prepare('SELECT id from customer WHERE email = :email');
	$customerId->execute(['email' => $email]);
	$customerId = $customerId->fetchAll();
	$customerId = $customerId[0]['id'];


	// Insert into Booking Table
	$today = date("Y-m-d");
	$insertBooking = $pdo->prepare('insert into booking (userId, bookingDate, checkIn, checkOut)
				values (:userId, :bookingDate, :checkIn, :checkOut)');
    $insertBooking->execute([
		'userId' => $customerId,
		'bookingDate' => $today,
		'checkIn' => $checkIn,
		'checkOut' => $checkOut,
	]);

	// Got Inserted Booking ID:
	$bookingId = $pdo->prepare('SELECT id from booking WHERE userId = :customerId');
	$bookingId->execute(['customerId' => $customerId]);
	$bookingId = $bookingId->fetchAll();
	$bookingId = $bookingId[0]['id'];

	// Insert into Payment Table
	$insertBooking = $pdo->prepare('insert into payment (bookingId, payable)
				values (:bookingId, :payable)');
    $insertBooking->execute([
		'bookingId' => $bookingId,
		'payable' => $totalPrice,
	]);



	require 'view/booking-confirmation.php';
