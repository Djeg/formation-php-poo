<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . '/../src/' . $className . '.php';
});


// Créer un login form
$form = new Form('POST', 'div');
?>
<html>

<head>
    <title>Mon Blog</title>
</head>

<body>
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
