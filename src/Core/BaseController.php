<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Cette class est la classe de base de tout nos controller. Elle possède
 * tout simplement le container
 */
abstract class BaseController
{
    protected Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Contrat de la méthode run. Cette méthode doit être
     * « implémenter » pour chaque controller et dois afficher
     * la page du controller.
     */
    abstract public function run(): string;

    /**
     * Contrat de la méthode supports. Cette méthode prend
     * une uri en paramètre et retourne vrai ou faux. Vrai
     * si l'uri correspond au controller, faux si l'uri ne correspond
     * pas
     */
    abstract public function supports(string $uri): bool;
}
