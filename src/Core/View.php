<?php

declare(strict_types=1);

namespace App\Core;

use Exception;

/**
 * Permet d'afficher un « template » (une page) PHP.
 */
class View
{
    protected string $templateDir;

    public function __construct(string $templateDir)
    {
        $this->templateDir = $templateDir;
    }

    /**
     * Affiche un template php et retourne son contenue sous forme
     * de chaîne de caractères.
     */
    public function render(string $template, array $variables = []): string
    {
        // On démarre le buffer d'affichage
        ob_start();

        // On extrait toutes les variables
        extract($variables);

        // on assemble le nom de notre fichier
        $filename = "{$this->templateDir}/$template.php";
        // on test si notre fichier n'existe pas
        if (!file_exists($filename)) {
            // Ici nous allons créer une erreur
            throw new Exception("Oups, il n'y a pas de « templates » (page) qui correspond à $filename");
        }

        // Nous incluons le fichier
        include $filename;

        // Je retourne le fichier inclue :
        return ob_get_clean();
    }
}
