<?php

declare(strict_types=1);

namespace App\Query;

use App\Core\BaseQuery;
use App\Model\User;

/**
 * Permet d'envoyer des requêtes à notre model User
 */
class UserQuery extends BaseQuery
{
    public function getModel(): string
    {
        return User::class;
    }

    /**
     * Retourne tout les utilisateurs
     */
    public function findAll(): array
    {
        return $this->database->fetchAll(
            "SELECT * FROM user",
            [],
            $this->getModel(),
        );
    }
}
