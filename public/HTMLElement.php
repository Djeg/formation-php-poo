<?php

class HTMLElement
{
    protected string $balise;

    protected array $attributs;

    public function __construct(string $balise, array $attributs = [])
    {
        $this->balise = $balise;
        $this->attributs = $attributs;
    }

    public function start(): string
    {
        $attributs = '';

        foreach ($this->attributs as $nom => $valeur) {
            // href="/mon-lien"
            // $attribut = "$nom=\"$valeur\""
            $attribut = $nom . '="' . $valeur . '"';

            // $attributs = $attributs . " $attribut";

            $attributs .= " $attribut";
        }

        return "<$this->balise$attributs>";
    }

    public function end(): string
    {
        return "</$this->balise>";
    }

    public function autoClose(): string
    {
        $attributs = '';

        foreach ($this->attributs as $nom => $valeur) {
            // href="/mon-lien"
            // $attribut = "$nom=\"$valeur\""
            $attribut = $nom . '="' . $valeur . '"';

            // $attributs = $attributs . " $attribut";

            $attributs .= " $attribut";
        }

        return "<$this->balise$attributs/>";
    }
}
