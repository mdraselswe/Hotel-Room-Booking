<?php

    $router->get('', 'controller/home.controller.php');
    $router->get('booking-check-form', 'controller/booking-check-form.controller.php');
    $router->post('booking-check-form', 'controller/booking-check-form.controller.php');
    $router->post('booking-user-form', 'controller/booking-user-form.php');
    $router->post('booking-confirmmation', 'controller/booking-confirmation.php');
    $router->get('test', 'controller/test.php');
