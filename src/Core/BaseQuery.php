<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Représente un objet de requête pour nos modeles
 */
abstract class BaseQuery
{
    protected Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    /**
     * Retourne plusieurs résultat d'un requête sous forme
     * de model
     */
    public function fetchAll(string $request, array $parameters = []): array
    {
        return $this->database->fetchAll($request, $parameters, $this->getModel());
    }

    /**
     * Retourne un seul résultat sous forme de model
     */
    public function fetch(string $request, array $parameters = []): mixed
    {
        return $this->database->fetch($request, $parameters, $this->getModel());
    }

    /**
     * Retourne la class de notre model
     */
    abstract public function getModel(): string;
}
