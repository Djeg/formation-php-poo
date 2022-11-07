<?php

declare(strict_types=1);

namespace App\Core;

use App\Controller\ListUserController;
use App\Query\UserQuery;
use Exception;

/**
 * Cette classe est notre chef d'orchestre pour l'intégralité des objets
 * de notre application.
 */
class Container
{
    protected array $services;

    /**
     * Démarre un container remplie de tout les services de l'application
     */
    static public function start(): Container
    {
        $container = new Container();

        return $container
            ->add(Configuration::class, new Configuration())
            ->add(ViewEngine::class, new ViewEngine())
            ->add(Database::class, new Database($container->get(Configuration::class)))
            ->add(UserQuery::class, new UserQuery($container->get(Database::class)))
            ->add(ListUserController::class, new ListUserController($container))
            ->add(Router::class, new Router([
                $container->get(ListUserController::class),
            ]));
    }

    public function __construct(array $services = [])
    {
        $this->services = $services;
    }

    /**
     * Ajoute un nouveau service à notre container
     */
    public function add(string $name, mixed $service): self
    {
        if ($this->has($name)) {
            throw new Exception("Oups, il semble qu'il éxiste dèja un service nommé $name");
        }

        $this->services[$name] = $service;

        return $this;
    }

    /**
     * Test si un service est enregistré
     */
    public function has(string $name): bool
    {
        return isset($this->services[$name]);
    }

    /**
     * Retourne un service
     */
    public function get(string $name): mixed
    {
        if (!$this->has($name)) {
            throw new Exception("Oups, il semble que le service $name ne soit pas enregistré");
        }

        return $this->services[$name];
    }
}
