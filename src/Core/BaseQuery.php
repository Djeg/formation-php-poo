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
     * Retourne la class de notre model
     */
    abstract public function getModel(): string;
}
