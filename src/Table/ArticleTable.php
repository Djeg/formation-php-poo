<?php

declare(strict_types=1);

namespace App\Table;

use App\Core\BaseTable;
use App\Entity\Article;
use PDO;

/**
 * Représente la table des articles
 */
class ArticleTable extends BaseTable
{
    /**
     * Retourne le tableau de tout les article de la
     * base de données
     */
    public function findAll(): array
    {
        // Préparation de la requête SQL
        $request = $this->pdo->prepare("SELECT * FROM articles");

        // Lancement de la requête
        $request->execute();

        // Récupérer les résultats, sous forme de tableaux de la class
        // Article
        $articles = $request->fetchAll(PDO::FETCH_CLASS, Article::class);

        return $articles;
    }
}
