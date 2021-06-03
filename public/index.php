<?php

require(__DIR__ . '/../vendor/autoload.php');

use App\Controller\PersonnageController;

$pageName = isset($_GET['page']) ? $_GET['page'] : 'index';

$controller = new PersonnageController();
$controller->$pageName();
