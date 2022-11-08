<?php

declare(strict_types=1);

namespace App\Core;

use Dotenv\Dotenv;
use Exception;

/**
 * Cette classe charge la configuration contenue dans des variables
 * d'environement. Permet d'accéder et de tester facilement
 * la configuration de notre application.
 */
class Configuration
{
    public function __construct(string $envDir)
    {
        // On lie et obtient les variables d'environement
        // du fichier ".env"
        Dotenv::createImmutable($envDir)->load();
    }

    /**
     * Test si une variable d'environement éxsiste
     */
    public function has(string $envVariable): bool
    {
        return isset($_ENV[$envVariable]);
    }

    /**
     * Récupére une variable d'environement. Attention,
     * une erreur survient si la variable n'éxiste pas.
     */
    public function get(string $envVariable): mixed
    {
        // Tester si la variable éxiste
        if ($this->has($envVariable)) {
            return $_ENV[$envVariable];
        }

        throw new Exception("Oups, la variable d'environement $envVariable n'éxiste pas. Peut-être avez-vous fais une faute de frappe ?");
    }
}
