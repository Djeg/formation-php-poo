<?php

declare(strict_types=1);

namespace App\Core;

use Exception;

/**
 * Cette class permet d'afficher une vue (un template)
 */
class ViewEngine
{
    protected string $templateBasePath;

    protected array $world;

    public function __construct(
        string $templateBasePath = __DIR__ . '/../../templates',
        array $world = [],
    ) {
        $this->templateBasePath = $templateBasePath;
        $this->world = $world;
    }

    /**
     * Affiche un template (ou fichier php)
     */
    public function render(string $name, array $parameters = []): string
    {
        $templatePath = "{$this->templateBasePath}/{$name}.php";

        if (!file_exists($templatePath)) {
            throw new Exception("There is no template named $name inside the {$this->templateBasePath} folder");
        }

        ob_start();
        extract($parameters);
        extract(['world' => $this->world]);

        include $templatePath;

        return ob_get_clean();
    }
}
