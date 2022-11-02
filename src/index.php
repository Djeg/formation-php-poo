<?php

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

$characters = [
    new Character('Arthur'),
    new Character('Merlin'),
    new Character('Morganne'),
];

foreach ($characters as $character) {
    echo $character;
}
