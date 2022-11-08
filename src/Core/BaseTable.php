<?php

declare(strict_types=1);

namespace App\Core;

use PDO;

/**
 * C'est la classe parente des tables de notre base de données.
 * Les tables permettent de récupérer / insérer / supprimer ou
 * modifier des données (entity).
 */
class BaseTable
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}
