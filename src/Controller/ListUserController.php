<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\BaseController;
use App\Core\ViewEngine;
use App\Query\UserQuery;

/**
 * Controller affichant la page de liste de tout les utilisateurs
 */
class ListUserController extends BaseController
{
    public function start(): string
    {
        $users = $this->container->get(UserQuery::class)->findAll();

        return $this->container->get(ViewEngine::class)->render('listUser', [
            'users' => $users,
        ]);
    }

    public function route(): string
    {
        return '/^\/users$/';
    }
}
