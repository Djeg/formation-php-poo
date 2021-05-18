<?php

require_once __DIR__ . '/../vendor/autoload.php';

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
