<?php


namespace App;

/**
 * Représente un magicien
 */
class Magician extends Character
{
    /**
     * Charme un énemie : Enléve de la vie et soigne
     */
    public function charm(Character $target): void
    {
        $this->hit($target);
        $this->heal(10);
    }
}
