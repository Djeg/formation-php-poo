<?php

namespace App\Table;

use PDO;

class PersonnageTable
{
    public function enregistrer(array $data): void
    {
        if (!empty($data)) {
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
        }
    }
}
