<?php


namespace App;

/**
 * Représente un guerrier, un personnage spécialisé
 */
class Warrior extends Character
{
    /**
     * Charge un énemie : Enléve de la vie et de l'attaque
     */
    public function charge(Character $target): void
    {
        $this->hit($target);

        $target->attack = $target->attack - 5;

        if ($target->attack < 0) {
            $target->attack = 0;
        }
    }
}
