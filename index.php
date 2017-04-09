<?php

	require 'core/bootstrap.php';

    $date = $pdo->prepare("SELECT * FROM roomCategory");
    $date->execute();

    dd($date->fetchAll());

    require 'view/home.php';
