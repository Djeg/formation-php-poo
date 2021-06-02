<?php

namespace App\Validateur;

class PersonnageValidateur
{
    public function valider(array $data): array
    {
        $errors = [];

        if (!empty($data)) {
            if (strlen($data['nom']) < 2) {
                $errors['nom'] = "vous n'avez pas spécifié de nom pour votre personnage, ou bien le nom est trop court";
            }

            if ((int)$data['vie'] < 9 || (int)$data['vie'] > 100) {
                $errors['vie'] = "Vous n'avez pas spécifier de vie, ou bien la vie n'est pas compris entre 10 et 100";
            }

            if ((int)$data['attaque'] < 5 || (int)$data['attaque'] > 50) {
                $errors['attaque'] = "Vous n'avez pas spécifier d'attaque, ou bien l'attaque n'est pas compris entre 5 et 50";
            }

            if ((int)$data['magie'] < 5 || (int)$data['magie'] > 50) {
                $errors['magie'] = "Vous n'avez pas spécifier de magie, ou bien la magie n'est pas compris entre 5 et 50";
            }
        } else {
            $errors[] = "Vous n'avez pas soumis le formulaire";
        }

        return $errors;
    }
}
