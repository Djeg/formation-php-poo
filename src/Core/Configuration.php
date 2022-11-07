<?php

declare(strict_types=1);

namespace App\Core;

use Dotenv\Dotenv;

class Configuration
{
    protected string $directory;

    protected ?string $configName;

    protected Dotenv $dotenv;

    public function __construct(
        string $directory = __DIR__ . '/../../',
        string $configName = '.env',
    ) {
        $this->directory = $directory;
        $this->configName = $configName;
        $this->dotenv = Dotenv::createImmutable($this->directory, $this->configName);

        $this->dotenv->load();
    }

    /**
     * Retourne une valeur de configuration
     */
    public function get(string $name): string
    {
        if (!isset($_ENV[$name])) {
            throw new \Exception("There is no configuration value for $name");
        }

        return $_ENV[$name];
    }
}
