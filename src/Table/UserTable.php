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

    /**
     * Insert un nouvel utilisateur dans la base de données
     */
    public function insert(User $user): void
    {
        // Préparation de la requête SQL
        $request = $this->pdo->prepare("
            INSERT INTO users (email, password, firstname, lastname, createdAt, updatedAt)
            VALUES (:email, :password, :firstname, :lastname, :createdAt, :updatedAt)
        ");

        // On lance la requête avec les bon paramètres
        $request->execute([
            'email' => $user->email,
            'password' => $user->password,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'createdAt' => $user->createdAt,
            'updatedAt' => $user->updatedAt,
        ]);
    }
}
