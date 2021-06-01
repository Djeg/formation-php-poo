<?php

class Personnage
{
    public int $vie = 100;

    public int $attaque = 20;

    public function regenerer($vie): void
    {
        $this->vie = $this->vie + $vie;
    }
}
