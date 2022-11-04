<?php

declare(strict_types=1);

namespace App;

/**
 * Représente l'armure de notre personnage
 */
class Armor
{
    protected string $name;

    protected int $protection;

    public function __construct(string $name = 'Sous Vêtements', int $protection = 1)
    {
        $this->name = $name;
        $this->protection = $protection;
    }

    /**
     * Retourne le nom de notre armure
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Retourne le montant de la protection de notre armure
     */
    public function getProtection(): int
    {
        return $this->protection;
    }

    public function __toString(): string
    {
        return "{$this->name} ({$this->protection})";
    }
}
