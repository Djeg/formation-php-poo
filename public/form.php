<?php

require_once 'HTMLElement.php';

$form = new HTMLElement('form');
$div = new HTMLElement('div');
$p = new HTMLElement('p');

?>
<?php echo $form->start(); ?>
<input type="text" />
<?php echo $form->end(); ?>

<?php echo $div->start(); ?>

<?php echo $p->start(); ?>
Coucou
<?php echo $p->end(); ?>

<?php echo $div->end(); ?>
