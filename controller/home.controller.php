<?php

if (isset($_SESSION)) {
	session_destroy();
 }

    $date = $pdo->prepare("SELECT * FROM roomCategory ORDER By price");
    $date->execute();

    $roomCategory = $date->fetchAll(PDO::FETCH_ASSOC);


	require 'view/home.php';
