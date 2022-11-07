<?php

use App\Controller\ListUserController;
use App\Core\Container;
use App\Query\UserQuery;

require_once __DIR__ . '/../vendor/autoload.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif|txt|json|js|html|pdf|avi|mp3|mp4)$/i', $_SERVER["REQUEST_URI"])) {
    return false;
}

$container = Container::start();

echo $container->get(ListUserController::class)->start();
