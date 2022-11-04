<?php


namespace App;

/**
 * Représente un personnage d'un jeux video
 */
class Character
{
    protected string $name;

    protected int $life = 100;

    protected int $maxLife = 100;

    protected int $attack = 40;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Ajoute autant de point de vie à un personnage
     * que voulu.
     */
    public function heal(int $lifeAmountToIncrease): void
    {
        $this->life = $this->life + $lifeAmountToIncrease;

        if ($this->life > $this->maxLife) {
            $this->life = $this->maxLife;
        }
    }

    /**
     * Retire à une cible le montant de l'attaque d'un personnage
     */
    public function hit(Character $target): void
    {
        $target->life = $target->life - $this->attack;

        if ($target->life < 0) {
            $target->life = 0;
        }
    }

    public function __toString(): string
    {
        return "
            <h3>{$this->name}</h3>
            <ul>
                <li>Vie : {$this->life} / {$this->maxLife}</li>
                <li>Attaque : {$this->attack}</li>
            </ul>
        ";
    }
}
