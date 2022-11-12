<?php

declare(strict_types=1);

namespace App\Core;

use Dotenv\Dotenv;
use Exception;

/**
 * Cette classe permet de lire et de récupérer des variables
 * d'environemment. En effet, merci au « Twelve-Factor App »,
 * l'intégralité de le configuration d'une application doit être
 * déclaré dans des variables d'environemment ou fichier ".env"
 */
class Configuration
{
    /**
     * Pour construire cette objet configuration il nous faut
     * tout d'abord lui envoyer le chemin du dossier contenant
     * notre fichier ".env" !
     */
    public function __construct(string $dir)
    {
        // on test tout d'abord si le dossier éxiste
        if (!is_dir($dir)) {
            throw new Exception("Oops, il semble que le dossier {$dir} n'éxiste pas, il est donc impossible de charger la configuration :/");
        }

        // Démarrage de la librairie Dotenv pour lire le fichier
        // .env
        $env = Dotenv::createImmutable($dir);

        // On charge la configuration
        try {
            $env->load();
        } catch (Exception $e) {
            throw new Exception("Oops, il semble que la fichier .env n'existe pas dans le dossier {$dir}, il est donc impossible de charger la configuration");
        }
    }

    /**
     * Permet de récupérer une variable d'environemment
     * par son nom
     */
    public function get(string $name): string
    {
        if (!$this->has($name)) {
            throw new Exception("Oops, il semble que la variable d'environemment {$name} n'éxiste pas. Peut-être avez vous fait une faute de frappe, ou bien cette dernière n'est pas présente dans le fichier .env ?");
        }

        return $_ENV[$name];
    }

    /**
     * Test si une variable d'environemment éxiste
     */
    public function has(string $name): bool
    {
        return isset($_ENV[$name]);
    }
}
