<?php

declare(strict_types=1);

namespace App\Core;

use Exception;

/**
 * Collect tout les controller et permet de lancer
 * un controller en fonction de la request uri :)
 */
class Router
{
    protected array $controllers;

    public function __construct(array $controllers = [])
    {
        $this->controllers = $controllers;
    }

    /**
     * Lance le router et démarre un controller
     */
    public function start(): string
    {
        $requestUri = $_SERVER['REQUEST_URI'];

        foreach ($this->controllers as $controller) {
            if (preg_match($controller->route(), $requestUri)) {
                return $controller->start();
            }
        }

        throw new Exception("Oups, il ne semble pas avoir de controlleur pour la route $requestUri :/");
    }
}
