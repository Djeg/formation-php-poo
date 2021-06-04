<?php

require(__DIR__ . '/../vendor/autoload.php');

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    'PDO' => new PDO('mysql:dbname=mini-game;host=mysql', 'root', 'root')
]);
$container = $builder->build();
$controller = $container->get('App\\Controller\\PersonnageController');

$pageName = isset($_GET['page']) ? $_GET['page'] : 'accueil';

$controller->$pageName();

//use App\Controller\PersonnageController;
//
//$pageName = isset($_GET['page']) ? $_GET['page'] : 'accueil';
//
//$validateur = new App\Validateur\PersonnageValidateur();
//$table = new App\Model\Table\PersonnageTable($validateur);
//$controller = new PersonnageController($table);
//$controller->$pageName();
