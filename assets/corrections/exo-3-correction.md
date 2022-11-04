# Correction de l'exercice 3 : Weapon et Armor

Créer une class « Weapon » dans le répertoire `src` :

```php
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

    public function __construct(string $name, int $damage = 10)
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

```

Créer une class « Armor » dans le répertoire `src` :

```php
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

    public function __construct(string $name, int $protection = 10)
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

```

Ajouter un scipt « test-weapon-and-armor.php » dans `bin` :

```php
<?php

use App\Armor;
use App\Weapon;

require __DIR__ . '/../vendor/autoload.php';

$gun = new Weapon('Big Gun', 50);
$fork = new Weapon('Fourchette En Plastoc', 5);

$skirt = new Armor('Robe de soirée', 2);
$cuirasse = new Armor('Cuirasse en fonte', 90);

echo "Arme : {$gun}\n";
echo "Arme : {$fork}\n";

echo "Armure : {$skirt}\n";
echo "Armure : {$cuirasse}";
```
