<?php

declare(strict_types=1);

namespace App\Table;

use PDO;
use App\Core\BaseTable;
use App\Entity\User;

/**
 * Représent la table de nos utilisateurs
 */
class UserTable extends BaseTable
{
    /**
     * Retourne le tableau de tout les utilisateurs
     * de la base de données
     */
    public function findAll(): array
    {
        // Préparation de la requête SQL
        $request = $this->pdo->prepare("SELECT * FROM users");

        // Lancement de la requête
        $request->execute();

        // Récupérer les résultats, sous forme de tableaux de la class
        // User
        $users = $request->fetchAll(PDO::FETCH_CLASS, User::class);

        return $users;
    }
}
