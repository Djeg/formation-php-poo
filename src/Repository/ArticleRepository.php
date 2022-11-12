<?php

declare(strict_types=1);

namespace App\Repository;

use App\Core\BaseRepository;
use App\Entity\Article;
use PDO;

/**
 * Permet de récupérer, créer, modifier et supprimer des
 * articles de la base de données
 */
class ArticleRepository extends BaseRepository
{
    /**
     * Retourne tout les articles de la base de données
     */
    public function findAll(): array
    {
        // Création de la requête SQL
        $request = $this->pdo->prepare('SELECT * FROM articles');

        // Éxécution de la requête
        $request->execute();

        // Récupération des résultats sous forme de tableaux
        // d'instance de l'entité Article
        return $request->fetchAll(PDO::FETCH_CLASS, Article::class);
    }

    /**
     * Retourne les 10 derniers articles, ordonnée par date de création
     */
    public function findLastTen(): array
    {
        // Création de la requête SQL
        $request = $this->pdo->prepare('SELECT * FROM articles ORDER BY createdAt DESC LIMIT 10');

        // Éxécution de la requête
        $request->execute();

        // Récupération des résultats sous forme de tableaux
        // d'instance de l'entité Article
        return $request->fetchAll(PDO::FETCH_CLASS, Article::class);
    }
}
