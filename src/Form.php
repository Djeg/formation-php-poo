<?php

class Form
{
    public function label($text, $for): void
    {
        echo '<label for="' . $for . '">' . $text . '</label>';
    }

    public function input($name, $type): void
    {
        echo '<input type="' . $type . '" name="' . $name . '" id="' . $name . '" />';
    }

    public function submitButton($text): void
    {
        echo '<button type="submit">' . $text . '</button>';
    }
}
