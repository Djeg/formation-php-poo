<?php

declare(strict_types=1);

namespace App\Core;

use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Exception;
use PDO;

/**
 * Cette classe collecte toutes les instances de notre application.
 * C'est dans cette classe que nous pouvons ajouter de nouvel instances,
 * et que nous allons pouvoir les récupérer simplements.
 * 
 * Les instances stocké dans ce container sont nommé les « Services »
 */
class Container
{
    /**
     * Contient l'intégralité des services du container
     */
    protected array $services;

    /**
     * Contient les étiquettes ainsi que leurs services
     * associé
     */
    protected array $tags;

    /**
     * Créer un nouveau container contenant tout les services de notre
     * application
     */
    static public function boot(): Container
    {
        $container = new Container();

        return $container
            ->add('ROOT_DIR', __DIR__ . '/../..')
            ->add('TEMPLATES_DIR', $container->get('ROOT_DIR') . '/templates')
            ->add(View::class, new View($container->get('TEMPLATES_DIR')))
            ->add(Configuration::class, new Configuration($container->get('ROOT_DIR')))
            ->add(PDO::class, new PDO(
                "mysql:host={$container->get(Configuration::class)->get('DATABASE_HOST')};
                    port={$container->get(Configuration::class)->get('DATABASE_PORT')};
                    dbname={$container->get(Configuration::class)->get('DATABASE_NAME')}",
                $container->get(Configuration::class)->get('DATABASE_USER'),
                $container->get(Configuration::class)->get('DATABASE_PASSWORD'),
            ))
            ->add(ArticleRepository::class, new ArticleRepository($container->get(PDO::class)))
            ->add(UserRepository::class, new UserRepository($container->get(PDO::class)));
    }

    /**
     * Créer un nouveau container en initialisant les propriètès.
     */
    public function __construct()
    {
        $this->services = [];
        $this->tags = [];
    }

    /**
     * Ajoute un nouveau service dans le container
     */
    public function add(string $name, $service, array $tags = []): self
    {
        // On test tout d'abord si le service est dèja enregistré
        if ($this->has($name)) {
            // Si c'est le cas, nous envoyons une erreur car cela peut-être dramatique
            // de remplacer un service éxistant
            throw new Exception("Oops, il semble que le service {$name} soit dèja enregistré dans le container.");
        }

        // Nous assignons le service à notre tableaux de services
        $this->services[$name] = $service;

        // Nous allons ensuite associé le service à de possible étiquettes
        foreach ($tags as $tag) {
            // Si le tag n'est pas présent dans notre container
            if (!isset($this->tags[$tag])) {
                // Nous ajoutons le tag
                $this->tags[$tag] = [];
            }

            // Maintenant nous pouvons ajouter le service à notre tag 
            $this->tags[$tag][] = $service;
        }

        return $this;
    }

    /**
     * Test si un service est présent dans le container
     */
    public function has(string $name): bool
    {
        return isset($this->services[$name]);
    }

    /**
     * Retourne le service demandé
     */
    public function get(string $name): mixed
    {
        // On test tout d'abord l'éxsitence du service
        if (!$this->has($name)) {
            // Si il n'éxsiste pas, nous levons une erreur
            throw new Exception("Oops, il ne semble pas y avoir de services enregistré avec le nom $name");
        }

        // Nous retournons le service demandé
        return $this->services[$name];
    }

    /**
     * Retourne tout les services qui possède
     * l'étiquette
     */
    public function getTagged(string $tag): array
    {
        // On test tout d'abord si l'étiquette éxiste
        if (!isset($this->tags[$tag])) {
            // On léve une erreur car l'étiquette n'éxsite pas
            throw new Exception("Oops, il ne semble pas y avoir de services étiqueté {$tag} :/");
        }

        return $this->tags[$tag];
    }
}
