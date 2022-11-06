<?php

use App\Core\Config;

require_once __DIR__ . '/../vendor/autoload.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif|txt|json|js|html|pdf|avi|mp3|mp4)$/i', $_SERVER["REQUEST_URI"])) {
    return false;
}

$config = new Config();

echo $config->get('DATABASE_HOST');
