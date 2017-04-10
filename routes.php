<?php

    $router->get('', 'controller/home.controller.php');
    $router->get('booking-check-form', 'controller/booking-check-form.controller.php');
    $router->post('booking-check-form', 'controller/booking-check-form.controller.php');
    $router->post('booking-user-form', 'view/booking-user-form.php');
    $router->get('test', 'controller/test.php');
    // $router->get('rent', 'controller/rent.php');
    // $router->get('rent-form', 'controller/rent-form.php');
    // $router->get('test', 'controller/test.php');
    // $router->get('add-member', 'controller/member-form.php');
    // $router->get('member-list', 'controller/member-list.php');
    // $router->get('temp-query', 'controller/temp-query.php');
    // $router->get('ground-floor', 'controller/ground-floor.php');
    // $router->post('temp-query', 'controller/temp-query.php');
    // $router->post('rent-submit', 'controller/rent-submit.php');
    // $router->post('member-submit', 'controller/member-submit.php');
