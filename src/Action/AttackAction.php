<?php

declare(strict_types=1);

namespace App\Action;

use App\Character;

class AttackAction extends Action
{
    public function execute(Character $subject, Character $target = null): void
    {
        $target->takeDamage($subject->getWeapon()->getDamage() - $target->getArmor()->getProtection());
    }
}
