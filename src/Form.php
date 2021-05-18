<?php

class Form
{
    protected string $separator;

    protected string $method;

    public function __construct(string $method, string $separator)
    {
        $this->separator = $separator;
        $this->method = $method;
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

    public function button(string $text): void
    {
        $this->startBlock();
        $this->submitButton($text);
        $this->endBlock();
    }

    public function start(): void
    {
        echo '<form method="' . $this->method . '">';
    }

    public function end(): void
    {
        echo '</form>';
    }

    public function display(array $config): void
    {
        $widgets = $config['widgets'];
        $buttonLabel = $config['button'];

        $this->start();

        // Boucler sur les widgets et appeler la méthode widget avec les
        // bon arguments
        foreach ($widgets as $widget) {
            $label = $widget[0];
            $name = $widget[1];
            $type = $widget[2];

            $this->widget($label, $name, $type);
        }

        // Afficher un bouton avec le $boutonLabel
        $this->button($buttonLabel);

        $this->end();
    }
}
