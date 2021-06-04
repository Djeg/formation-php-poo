<?php

namespace App\Model\Table;

use App\Validateur\PersonnageValidateur;
use PDO;
use App\Model\Personnage;

class PersonnageTable
{
    private PersonnageValidateur $validateur;

    public function __construct(PersonnageValidateur $validateur)
    {
        $this->validateur = $validateur;
    }

    public function enregistrer(Personnage $perso): array
    {
        $errors = $this->validateur->valider($perso);

        if (!empty($errors)) {
            return $errors;
        }

        // enregistrer les données dans une base de données
        $pdo = new PDO('mysql:dbname=mini-game;host=mysql', 'root', 'root');
        $sql = 'INSERT INTO personnages (nom, vie, attaque, magie) VALUES (:nom, :vie, :attaque, :magie)';

        $request = $pdo->prepare($sql);
        $request->execute([
            'nom' => $perso->getNom(),
            'vie' => $perso->getVie(),
            'attaque' => $perso->getAttaque(),
            'magie' => $perso->getMagie()
        ]);

        return [];
    }

    public function toutRecuperer(): array
    {
        // enregistrer les données dans une base de données
        $pdo = new PDO('mysql:dbname=mini-game;host=mysql', 'root', 'root');
        $sql = 'SELECT * from personnages ORDER BY id DESC';

        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        $personnages = [];

        foreach ($data as $persoData) {
            $personnages[] = new Personnage(
                $persoData['nom'],
                $persoData['vie'],
                $persoData['attaque'],
                $persoData['magie']
            );
        }

        return $personnages;
    }
}
