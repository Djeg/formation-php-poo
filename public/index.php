<?php

use App\Core\ViewEngine;

require_once __DIR__ . '/../vendor/autoload.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif|txt|json|js|html|pdf|avi|mp3|mp4)$/i', $_SERVER["REQUEST_URI"])) {
    return false;
}

$view = new ViewEngine(
    __DIR__ . '/../templates',
    ['HTTP_METHOD' => $_SERVER['REQUEST_METHOD']],
);

echo $view->render('hello', ['name' => 'John Doe']);
