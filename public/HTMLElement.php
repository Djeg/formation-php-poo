<?php

class HTMLElement
{
    protected string $balise;

    public function __construct(string $balise)
    {
        $this->balise = $balise;
    }

    public function start(): string
    {
        return "<$this->balise>";
    }

    public function end(): string
    {
        return "</$this->balise>";
    }
}
