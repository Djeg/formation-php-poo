<?php

declare(strict_types=1);

namespace App\Repository;

use App\Core\BaseRepository;
use App\Entity\User;
use PDO;

/**
 * Permet d'insérer, récupérer, modifier et supprimer des utilisateurs
 * de la base de données
 */
class UserRepository extends BaseRepository
{
    /**
     * Récupére tout les utilisateurs de la base
     * de données
     */
    public function findAll(): array
    {
        // Création de la requête SQL
        $request = $this->pdo->prepare('SELECT * FROM users');

        // Éxécution de la requête
        $request->execute();

        // Récupération des résultats sous forme de tableaux
        // d'instance de l'entité Article
        return $request->fetchAll(PDO::FETCH_CLASS, User::class);
    }
}
