<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\View;
use App\Table\ArticleTable;
use App\Core\BaseController;

/**
 * Ce controller affiche la page d'accueil de notre blog
 */
class HomeController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function run(): string
    {
        // Je récupére mes articles
        $articles = $this->container->get(ArticleTable::class)->findLastTen();

        // Je retourne le template (page) "home" en lui donnant tout les
        // articles
        return $this->container->get(View::class)->render('home', [
            'articles' => $articles,
        ]);
    }
}
