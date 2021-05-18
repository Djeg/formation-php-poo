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
    $form->start();
    $form->widget('Nom d\'utilisateur', 'username', 'text');

    $form->widget('Mot de passe', 'password', 'password');

    $form->button('Envoyer');
    $form->end();
    // Afficher le label pour le nom d'utilisateur        
    // Afficher l'input pour le nom d'utilisateur
    // Affihcer le label pout le mot de passe
    // Afficher l'input pour le mote de passe
    // afficher un bouton de soumission
    ?>
</body>

</html>
