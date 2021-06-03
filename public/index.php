<?php

require(__DIR__ . '/../vendor/autoload.php');

use App\Controller\PersonnageController;

$controller = new PersonnageController();
$controller->index();
