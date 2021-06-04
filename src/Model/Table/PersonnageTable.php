<?php

namespace App\Model\Table;

use App\Validateur\PersonnageValidateur;
use PDO;
use App\Model\Personnage;

class PersonnageTable
{
    private PersonnageValidateur $validateur;

    private PDO $pdo;

    public function __construct(PersonnageValidateur $validateur, PDO $pdo)
    {
        $this->validateur = $validateur;
        $this->pdo = $pdo;
    }

    public function enregistrer(Personnage $perso): array
    {
        $errors = $this->validateur->valider($perso);

        if (!empty($errors)) {
            return $errors;
        }

        // enregistrer les données dans une base de données
        $sql = 'INSERT INTO personnages (nom, vie, attaque, magie) VALUES (:nom, :vie, :attaque, :magie)';

        $request = $this->pdo->prepare($sql);
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
        $sql = 'SELECT * from personnages ORDER BY id DESC';

        $request = $this->pdo->prepare($sql);
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
