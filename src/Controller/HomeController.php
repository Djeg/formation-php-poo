<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\BaseController;
use App\Core\View;
use App\Repository\ArticleRepository;

/**
 * Controller de la page d'accueil de notre site
 */
class HomeController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function run(): string
    {
        // Récupération des 10 derniers articles
        $articles = $this->container->get(ArticleRepository::class)->findLastTen();

        // Affichage de la page d'accueil
        return $this
            ->container
            ->get(View::class)
            ->render('home', ['articles' => $articles]);
    }

    /**
     * @inheritdoc
     */
    public function supports(string $method, string $uri): bool
    {
        // On s'assure que ce controller ne s'affiche que sur l'uri "/"
        return (bool)preg_match("/^\/?$/", $uri);
    }
}
