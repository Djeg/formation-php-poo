<?php

class Personnage
{
    public int $vie = 100;

    public int $attaque = 20;

    public int $defense;

    public function regenerer(): void
    {
        $this->vie = 100;
    }
}
