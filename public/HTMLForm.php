<?php

require_once 'HTMLElement.php';

class HTMLForm extends HTMLElement
{
    protected HTMLElement $separateur;

    public function __construct(HTMLElement $separateur, array $attributs = [])
    {
        parent::__construct('form', $attributs);

        $this->separateur = $separateur;
    }

    public function label(string $text, string $for): string
    {
        $element = new HTMLElement('label', [
            'for' => $for,
        ]);

        return $element->start() . $text . $element->end();
    }

    public function input(string $type, string $id): string
    {
        $element = new HTMLElement('input', [
            'type' => $type,
            'id' => $id,
        ]);

        return $element->autoClose();
    }

    public function submitButton(string $text): string
    {
        $element = new HTMLElement('button', [
            'type' => 'submit',
        ]);

        return $element->start() . $text . $element->end();
    }

    public function separatorStart(): string
    {
        return $this->separateur->start();
    }

    public function separatorEnd(): string
    {
        return $this->separateur->end();
    }

    public function widget(string $text, string $type, string $id): string
    {
        return $this->separatorStart()
            . $this->label($text, $id)
            . $this->input($type, $id)
            . $this->separatorEnd();
    }
}
