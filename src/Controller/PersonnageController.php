<?php

namespace App\Controller;

use App\Enregistreur\PersonnageEnregistreur;

// 1. Créer un objet PersonnageValidateur dans la méthode
//    accueil de PersonnageController
// 2. Créer un objet PersonnageTable dans la méthode accueil
//    de PersonnageController
// 3. Récupérer tout les personnages en lancant la méthode
//    toutRecuperer sur notre objet PersonnageTable

class PersonnageController
{
    protected PersonnageEnregistreur $enregistreur;

    public function __construct(PersonnageEnregistreur $enregistreur)
    {
        $this->enregistreur = $enregistreur;
    }

    public function accueil(): void
    {
        include __DIR__ . '/../View/accueil.php';
    }

    public function newPersonnage(): void
    {
        [$errors, $perso] = $this->enregistreur->enregistreFormulaire();

        include __DIR__ . '/../View/newPersonnage.php';
    }
}
