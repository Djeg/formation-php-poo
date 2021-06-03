<?php

namespace App\Controller;

use App\Model\Personnage;
use App\Model\Table\PersonnageTable;
use App\Validateur\PersonnageValidateur;

class PersonnageController
{
    public function index(): void
    {
    }

    public function newPersonnage(): void
    {
        $perso = new Personnage(
            isset($_POST['nom']) ? $_POST['nom'] : '',
            isset($_POST['vie']) ? (int)$_POST['vie'] : 0,
            isset($_POST['attaque']) ? (int)$_POST['attaque'] : 0,
            isset($_POST['magie']) ? (int)$_POST['magie'] : 0
        );

        if (!empty($_POST)) {
            $validateur = new PersonnageValidateur();
            $table = new PersonnageTable($validateur);
            $errors = $table->enregistrer($perso);
        }

        include __DIR__ . '/../View/newPersonnage.php';
    }
}
