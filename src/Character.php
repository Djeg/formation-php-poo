<?php

declare(strict_types=1);

namespace App;

use App\Action\Action;

/**
 * Représente un personnage de notre jeux
 */
class Character
{
    protected string $name;

    protected int $life;

    protected int $maxLife;

    protected Weapon $weapon;

    protected Armor $armor;

    public function __construct(
        string $name,
        int $life = 100,
        Weapon $weapon = new Weapon(),
        Armor $armor = new Armor(),
    ) {
        $this->name = $name;
        $this->life = $life;
        $this->maxLife = $life;
        $this->weapon = $weapon;
        $this->armor = $armor;
    }

    /**
     * Equipe une nouvelle arme
     */
    public function equipWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    /**
     * Équipe une nouvelle armure
     */
    public function equipArmor(Armor $armor): void
    {
        $this->armor = $armor;
    }

    /**
     * Retourne le nom du personnage
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Retourne la vie du personnage
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * Retourne la vie maximum du personnage
     */
    public function getMaxLife(): int
    {
        return $this->maxLife;
    }

    /**
     * Retourne l'arme du personnage
     */
    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    /**
     * Retourne l'armure du personnage
     */
    public function getArmor(): Armor
    {
        return $this->armor;
    }

    /**
     * Le perosnnage reçouie des dégats
     */
    public function takeDamage(int $damage = 0): void
    {
        $this->life = $this->life - $damage;

        if ($this->life < 0) {
            $this->life = 0;
        }
    }

    /**
     * Le personnage guérrie d'un montant donnée
     */
    public function heal(int $amount = 0): void
    {
        $this->life = $this->life + $amount;

        if ($this->life > $this->maxLife) {
            $this->life = $this->maxLife;
        }
    }

    /**
     * Test si le personnage est mort
     */
    public function isDead(): bool
    {
        return $this->life === 0;
    }

    public function __toString(): string
    {
        return "
            {$this->name} ({$this->life} / {$this->maxLife})
                {$this->weapon}
                {$this->armor}
        ";
    }

    /**
     * Cette méthode lance une action.
     */
    public function doAction(Action $action, Character $target = null): void
    {
        $action->execute($this, $target);
    }
}
