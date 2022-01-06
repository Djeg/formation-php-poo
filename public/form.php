<?php

require_once 'HTMLElement.php';

$div = new HTMLElement('div', ['class' => 'super-class coucou']);
$a = new HTMLElement('a', [
    'href' => '/mon-lien',
    'class' => 'red',
]);

echo $div->start(); // <div class="super-class coucou">

echo $a->start(); // <a href="/mon-lien" class="red">
echo $a->end(); // </a>

echo $div->end(); // </div>
