<?php
// Require notre class de Form
require '../src/Form.php';

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
