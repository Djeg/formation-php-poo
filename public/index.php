<?php

use App\Core\Config;
use App\Core\Database;
use App\Model\User;

require_once __DIR__ . '/../vendor/autoload.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif|txt|json|js|html|pdf|avi|mp3|mp4)$/i', $_SERVER["REQUEST_URI"])) {
    return false;
}

$database = new Database(new Config());

$users = $database->fetchAll('SELECT * FROM user', [], User::class);


var_dump($users);
