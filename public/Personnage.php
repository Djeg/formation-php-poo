<?php

class Personnage
{
    public int $vie = 100;

    public int $attaque = 20;

    public function regenerer(int $vie = 100): void
    {
        // $this->vie = $this->vie + $vie;
        $this->vie += $vie;

        if ($this->vie > 100) {
            $this->vie = 100;
        }
    }
}
