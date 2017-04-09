<?php


    $config = require 'config.php';
    require 'database/connection.php';

    $pdo = Connection::make($config['database']);

    // $date = $pdo->prepare("SELECT * FROM roomCategory");
    // $date->execute();
    //
    // die(var_dump($date->fetchAll()));
