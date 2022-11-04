## Correction de l'exercice 1 : Le personnage

Dans le fichier `src/index.php` placer le code suivant :

```php
<?php

/**
 * Représente un personnage d'un jeux video
 */
class Character
{
    public string $name;

    public int $life = 100;

    public int $maxLife = 100;

    public int $attack = 40;

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
```
