<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\BaseController;
use App\Core\View;

/**
 * Affiche la page de login
 */
class LoginController extends BaseController
{
    public function run(): string
    {
        return $this->container->get(View::class)->render('login');
    }

    public function supports(string $uri): bool
    {
        return $uri === '/connexion';
    }
}
