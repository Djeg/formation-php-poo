<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Classe de base d'un controller. Afin de pouvoir afficher une page
 * nous devons créer son controller et ce dernier doit respécter
 * cette classe
 */
abstract class BaseController
{
    /**
     * Contient le container. L'objet avec toutes les instances
     * de notre application.
     */
    protected Container $container;

    /**
     * Construit un controller en lui spécifiant un container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Contrat permettant de lancer un controller
     */
    abstract public function run(): string;

    /**
     * Contrat permettant de savoir si le controller doit
     * s'afficher. Pour cela, 2 paramètre :
     * 
     * - La méthode HTTP (GET, POST ...)
     * - L'uri ("/", "/connexion" etc ...)
     */
    abstract public function supports(string $method, string $uri): bool;
}
