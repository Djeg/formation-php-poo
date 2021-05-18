<?php

spl_autoload_register(function ($className) {
    $path = str_replace('\\', '/', $className);
    require_once __DIR__ . '/../src/' . $path . '.php';
});

use Outil\Textuelle\Text;

// Créer un login form
$form = new Form('POST', 'div');
?>
<html>

<head>
    <title>Mon Blog</title>
</head>

<body>
    <?php Text::title(); ?>

    <?php
    $form->display([
        'widgets' => [
            ['Email :', 'email', 'email'],
            ['Mot de passe :', 'password', 'password'],
        ],
        'button' => 'Envoyer'
    ]);
    ?>
</body>

</html>
