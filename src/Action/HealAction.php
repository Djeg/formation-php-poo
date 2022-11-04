<?php

declare(strict_types=1);

namespace App\Action;

use App\Character;

class HealAction extends Action
{
    protected int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function execute(Character $subject, Character $target = null): void
    {
        $subject->heal($this->amount);
    }
}
