<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Représente un controller de base !
 */
abstract class BaseController
{
    protected Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Cette méthode est utilisé pour lancer le controller
     * et son code et retourner une page
     */
    abstract public function start(): string;

    /**
     * Cette méthode est utilisé pour savoir si un controller
     * « match » une route. Elle doit retourner l'expression
     * régulière de notre route
     */
    abstract public function route(): string;
}
