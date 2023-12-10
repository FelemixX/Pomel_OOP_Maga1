<?php

include 'vendor/autoload.php';
require 'src/DI/UserMail/UserMail.php';
require 'src/DI/User/UserManager.php';
require 'src/DI/Mail/Mailer.php';

use App\DI\UserMail\UserMail;
use function DI\create;

//DI

$userMailContainer = new UserMail([
    'mailer' => create(\App\DI\Mail\Mailer::class),
    'user' => create(\App\DI\User\UserManager::class),
]);

//echo '<pre>' . __FILE__ . ':' . __LINE__ . ':<br>' . print_r($userMailContainer, true) . '</pre>'; //TODO: DELETE LOGGING

$container = function () {
    return[
        new \App\DI\Mail\Mailer(),
        new \App\DI\User\UserManager(new \App\DI\Mail\Mailer()),
    ];
};
