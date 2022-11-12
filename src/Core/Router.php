<?php

declare(strict_types=1);

namespace App\Core;

use Exception;

/**
 * Cette classe est responsable de l'affichage du bon controller
 * en fonction de la méthode et de l'uri d'un requête HTTP.
 */
class Router
{
    /**
     * Contient tout les controllers de l'application
     */
    protected array $controllers;

    /**
     * Construit un router en lui spécifiant le tableaux contenant
     * tous les controllers.
     */
    public function __construct(array $controllers)
    {
        $this->controllers = $controllers;
    }

    /**
     * Démarre l'application en cherchant le bon controller
     * en fonction d'une méthode et d'une uri
     */
    public function start(string $method, string $uri): string
    {
        // On boucle sur tout les controller
        foreach ($this->controllers as $controller) {
            // Si le controller supporte la méthode et l'uri :
            if ($controller->supports($method, $uri)) {
                // Alors on démarre et retourne le controller
                return $controller->run();
            }
        }

        // Si nous sortons de la boucle, alors aucun controller
        // n'as pu être trouvé. Nous devons lever un erreur
        throw new Exception("Oops, il ne semble pas y avoir de controller pour la méthode {$method} et l'uri {$uri}");
    }
}
