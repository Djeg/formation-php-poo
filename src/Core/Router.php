<?php

declare(strict_types=1);

namespace App\Core;

use Exception;

/**
 * Cette classe permet de « run » le bon controller en fonction
 * d'une URI
 */
class Router
{
    protected array $controllers;

    public function __construct(array $controllers)
    {
        $this->controllers = $controllers;
    }

    /**
     * Cette méthode retourne le résultat de la méthode « run »
     * du bon controller !
     */
    public function start(string $uri): string
    {
        // On boucle sur tout les controllers
        foreach ($this->controllers as $controller) {
            // On test si c'est le bon controller
            if ($controller->supports($uri)) {
                // On retourne run du controller
                return $controller->run();
            }
        }

        throw new Exception("Oops, il n'y a pas de controller qui semble fonctionner pour l'uri $uri :/");
    }
}
