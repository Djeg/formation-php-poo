<?php

require_once 'HTMLElement.php';
require_once 'HTMLForm.php';

$separateur = new HTMLElement('div', [
    'class' => 'separator',
]);

$loginForm = new HTMLForm($separateur, [
    'method' => 'POST',
]);


?>
<?php echo $loginForm->start(); ?>

<?php echo $loginForm->widget('Email :', 'email', 'email'); ?>
<?php echo $loginForm->widget('Mot de passe :', 'password', 'password'); ?>
<?php echo $loginForm->widget('Répéter le mot de passe', 'password', 'repeat-password'); ?>

<?php echo $loginForm->end(); ?>
