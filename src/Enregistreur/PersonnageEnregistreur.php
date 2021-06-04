<?php

namespace App\Enregistreur;

use App\Model\Personnage;
use App\Model\Table\PersonnageTable;

class PersonnageEnregistreur
{
    private PersonnageTable $table;

    public function __construct(PersonnageTable $table)
    {
        $this->table = $table;
    }

    public function enregistreFormulaire(): array
    {
        $perso = new Personnage(
            isset($_POST['nom']) ? $_POST['nom'] : '',
            isset($_POST['vie']) ? (int)$_POST['vie'] : 0,
            isset($_POST['attaque']) ? (int)$_POST['attaque'] : 0,
            isset($_POST['magie']) ? (int)$_POST['magie'] : 0
        );

        if (empty($_POST)) {
            return [[], $perso];
        }

        return [$this->table->enregistrer($perso), $perso];
    }
}
