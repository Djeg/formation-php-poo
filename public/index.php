<?php
// Require notre class de Form
require '../src/Form.php';

// Créer un login form
$form = new Form();
?>
<html>

<head>
    <title>Mon Blog</title>
</head>

<body>
    <form method="post">
        <?php
        $form->label('Nom d\'utilisateur', 'username');
        $form->input('username', 'text');
        $form->label('Mot de passe', 'password');
        $form->input('password', 'password');
        $form->submitButton('Envoyer');
        // Afficher le label pour le nom d'utilisateur        
        // Afficher l'input pour le nom d'utilisateur
        // Affihcer le label pout le mot de passe
        // Afficher l'input pour le mote de passe
        // afficher un bouton de soumission
        ?>
    </form>
</body>

</html>
