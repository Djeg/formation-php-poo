<?php

class Form
{
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
}
