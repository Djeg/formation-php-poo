<?php

declare(strict_types=1);

namespace App\Core;

use PDO;

/**
 * Cette classe représente le repository utilisé par tout les
 * autre repository. Il contient un instance de PDO et quelques
 * méthodes permettant de construire simplement des requête SQL
 */
class BaseRepository
{
    /**
     * Contient une instance de PDO
     */
    protected PDO $pdo;

    /**
     * Construit un repository en lui spécifiant une instance de PDO
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}
