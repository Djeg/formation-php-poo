<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\BaseController;
use App\Core\View;
use App\Entity\User;
use App\Table\UserTable;
use DateTime;

/**
 * Affiche la page d'inscription
 */
class SubscriptionController extends BaseController
{
    public function run(): string
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return $this->container->get(View::class)->render('subscription');
        }

        // Création d'un nouvelle utilisateur
        $user = new User();
        // @TODO Valider les données !
        // Remplir l'utilisateur avec les informations du formulaire
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->lastname = 'Jonny';
        $user->firstname = 'Donny';
        $user->createdAt = (new DateTime())->format('c');
        $user->updatedAt = (new DateTime())->format('c');

        // Enregistrement de notre utilisateur dans la base de donées
        $this->container->get(UserTable::class)->insert($user);

        return $this->container->get(View::class)->render('subscription', [
            'success' => "Bienvenue à vous {$user->email}",
        ]);
    }

    public function supports(string $uri): bool
    {
        return $uri === '/inscription';
    }
}
