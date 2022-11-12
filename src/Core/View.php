<?php

declare(strict_types=1);

namespace App\Core;

use Exception;

/**
 * Permet d'afficher un « template » php. Pour ce construire
 * cet objet à besoin du chemin vers le dossier contenant
 * nos « templates »
 */
class View
{
    public const GLOBAL_NAME = 'app';

    /**
     * Contient le chemin du dossier contenant tout
     * nos templates
     */
    protected string $templateDir;

    /**
     * Contient un tableaux contenant les variables
     * global de notre template. Ces variables sont
     * accessible à TOUS nos templates. Nous pouvons
     * facilement accéder à l'une de ces globales dans
     * un template en utilisant la variable "$app"
     */
    protected array $globals;

    /**
     * Construction d'une view. Le seul prérequis est d'envoyer
     * le chemin du dossier contenant tout nos templates. Vous pouvez
     * aussi insérer des variables global !
     */
    public function __construct(string $templateDir, array $globals = [])
    {
        if (!is_dir($templateDir)) {
            throw new Exception("Oops, impossible de construire la View car il semble que le dossier {$templateDir} n'éxiste pas");
        }

        $this->templateDir = $templateDir;
        $this->globals = $globals;
    }

    /**
     * Affiche le contenu « compilé » d'un template php
     * 
     * exemple :
     * 
     * $view->render('ma-page', ['name' => 'John Doe']);
     * 
     * Affiche le contenue du templates : ma-page.php en lui injéctant
     * la variable $name avec la valeur "John Doe"
     */
    public function render(string $template, array $variables = []): string
    {
        // Création du nom complet pour notre fichier
        $filename = "{$this->templateDir}/{$template}.php";

        // On s'assure de l'éxistence de ce template
        if (!file_exists($filename)) {
            // On affiche une erreur
            throw new Exception("Oops, le template {$template} ne semble pas exister dans le répertoire {$this->templateDir}");
        }

        // Démarrage du buffer d'affichage
        ob_start();

        // Extraction des variables
        extract($variables);
        extract([self::GLOBAL_NAME =>  $this->globals]);

        // Inclusion du fichier de template
        include $filename;

        // On retourne le contenu compilé !
        return ob_get_clean();
    }

    /**
     * On ajoute une variable global
     */
    public function addGlobal(string $name, $value): self
    {
        if ($this->hasGlobal($name)) {
            throw new Exception("Oops, il semble que la global {$name} éxsiste déja dans la View :/");
        }

        $this->globals[$name] = $value;

        return $this;
    }

    /**
     * On test si une global est dèja enregistré dans
     * notre view
     */
    public function hasGlobal(string $name): bool
    {
        return isset($this->globals[$name]);
    }

    /**
     * On supprime une global
     */
    public function removeGlobal(string $name): self
    {
        if ($this->hasGlobal($name)) {
            $this->globals = array_filter($this->globals, function ($v, $k) use ($name) {
                return $k !== $name;
            });
        }

        return $this;
    }
}
