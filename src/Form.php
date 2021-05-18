<?php

class Form
{
    protected string $separator;

    public function __construct(string $separator)
    {
        $this->separator = $separator;
    }

    public function label(string $text, string $for): void
    {
        echo '<label for="' . $for . '">' . $text . '</label>';
    }

    public function input(string $name, string $type): void
    {
        echo '<input type="' . $type . '" name="' . $name . '" id="' . $name . '" />';
    }

    public function submitButton(string $text): void
    {
        echo '<button type="submit">' . $text . '</button>';
    }

    public function startBlock(): void
    {
        echo '<' . $this->separator . '>';
    }

    public function endBlock(): void
    {
        echo '</' . $this->separator . '>';
    }

    public function widget(string $label, string $name, string $type): void
    {
        $this->startBlock();
        $this->label($label, $name);
        $this->input($name, $type);
        $this->endBlock();
    }
}
