<?php

declare(strict_types=1);

namespace App;

/**
 * Cette class représente une arme que peut porter
 * un personnage de notre jeux
 */
class Weapon
{
    protected string $name;

    protected int $damage;

    public function __construct(string $name = 'Main Nue', int $damage = 5)
    {
        $this->name = $name;
        $this->damage = $damage;
    }

    /**
     * Retourne le nom de l'arme
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Retourne le montant de dégat de l'arme
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    public function __toString(): string
    {
        return "{$this->name} ({$this->damage})";
    }
}
