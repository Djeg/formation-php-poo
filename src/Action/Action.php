<?php

declare(strict_types=1);

namespace App\Action;

use App\Character;

/**
 * Réprésente une action que peut faire un personnage
 */
class Action
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function execute(Character $subject, Character $target = null): void
    {
    }
}
