<?php

namespace App\Table;

use App\Validateur\PersonnageValidateur;
use PDO;

class PersonnageTable
{
    private PersonnageValidateur $validateur;

    public function __construct(PersonnageValidateur $validateur)
    {
        $this->validateur = $validateur;
    }

    public function enregistrer(array $data): array
    {
        $errors = $this->validateur->valider($data);

        if (!empty($data) && empty($errors)) {
            // enregistrer les données dans une base de données
            $pdo = new PDO('mysql:dbname=mini-game;host=mysql', 'root', 'root');
            $sql = 'INSERT INTO personnages (nom, vie, attaque, magie) VALUES (:nom, :vie, :attaque, :magie)';

            $request = $pdo->prepare($sql);
            $request->execute([
                'nom' => $data['nom'],
                'vie' => $data['vie'],
                'attaque' => $data['attaque'],
                'magie' => $data['magie']
            ]);

            var_dump('Personnage enregistré !');

            return [];
        }

        return $errors;
    }
}
