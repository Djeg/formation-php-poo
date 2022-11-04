## Exerice 2 : Personnage la suite

Toujours dans le fichier `src/index.php` placer le code suivant :

```php
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

$characters = [
    new Warrior('Arthur'),
    new Magician('Merlin'),
    new Character('Morganne'),
];

foreach ($characters as $character) {
    echo $character;
}

echo "<p>Arthur attaque merlin !</p>";

$characters[0]->hit($characters[1]);

foreach ($characters as $character) {
    echo $character;
}

echo "<p>Merlin se soigne de 10 points de vie !</p>";

$characters[1]->heal(10);

foreach ($characters as $character) {
    echo $character;
}

echo "<p>Arthur charge Merlin !</p>";

$characters[0]->charge($characters[1]);

foreach ($characters as $character) {
    echo $character;
}

echo "<p>Merlin charme Arthur !</p>";

$characters[1]->charm($characters[0]);

foreach ($characters as $character) {
    echo $character;
}
```
