<?php

declare(strict_types=1);

namespace App\Core;

use App\Controller\HomeController;
use PDO;
use Exception;
use App\Table\UserTable;
use App\Table\ArticleTable;

/**
 * Le container est un objet contenant tout les services
 * de notre application. Un service est une instance d'une classe
 * 
 * Cet objet contient TOUTES les instances que notre application
 * a besoin pour fonctionner.
 */
class Container
{
    protected array $services;

    /**
     * Démarre un container avec TOUT les services
     * de l'application
     */
    static public function boot(): Container
    {
        $container = new Container();

        return $container
            // Chemin vers le répertoire racine du projet
            ->add('ROOT_DIR', __DIR__ . '/../..')
            // Chemin vers le répertoire des templates
            ->add('TEMPLATE_DIR', "{$container->get('ROOT_DIR')}/templates")
            // Création de l'objet View
            ->add(View::class, new View($container->get('TEMPLATE_DIR')))
            // Création de l'objet Configuration
            ->add(Configuration::class, new Configuration($container->get('ROOT_DIR')))
            // Création de l'objet PDO
            ->add(PDO::class, new PDO(
                "mysql:host={$container->get(Configuration::class)->get('DATABASE_HOST')};
                    port={$container->get(Configuration::class)->get('DATABASE_PORT')};
                    dbname={$container->get(Configuration::class)->get('DATABASE_NAME')}",
                $container->get(Configuration::class)->get('DATABASE_USER'),
                $container->get(Configuration::class)->get('DATABASE_PASSWORD'),
            ))
            // Création de la table des utilisateurs
            ->add(UserTable::class, new UserTable($container->get(PDO::class)))
            // Création de la table des articles
            ->add(ArticleTable::class, new ArticleTable($container->get(PDO::class)))
            // Création du controller de la page d'accueil
            ->add(HomeController::class, new HomeController($container));
    }

    public function __construct()
    {
        $this->services = [];
    }

    /**
     * Est ce que un service éxiste
     */
    public function has(string $name): bool
    {
        return isset($this->services[$name]);
    }

    /**
     * Ajoute un service dans le container
     */
    public function add(string $name, $service): self
    {
        if ($this->has($name)) {
            throw new Exception("Oops, il semble que le service $name soit dèja enregistré");
        }

        $this->services[$name] = $service;

        return $this;
    }

    /**
     * Retourne un service
     */
    public function get(string $name): mixed
    {
        if (!$this->has($name)) {
            throw new Exception("Oops, il semble que le service $name ne soit pas enregistré. Peut-être que c'est simplement une faute de frappe ?");
        }

        return $this->services[$name];
    }
}
