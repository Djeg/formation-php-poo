<?php

require(__DIR__ . '/../vendor/autoload.php');

$perso = new App\Personnage(
    isset($_POST['nom']) ? $_POST['nom'] : '',
    isset($_POST['vie']) ? (int)$_POST['vie'] : 0,
    isset($_POST['attaque']) ? (int)$_POST['attaque'] : 0,
    isset($_POST['magie']) ? (int)$_POST['magie'] : 0
);

$validateur = new App\Validateur\PersonnageValidateur();
$table = new App\Table\PersonnageTable($validateur);
$errors = $table->enregistrer($perso);

?>
<form action="./new-personnage.php" method="post">
    <div>
        <?php if (isset($errors['nom'])) { ?>
            <p><?php echo $errors['nom']; ?></p>
        <?php } ?>
        <label for="nom">
            Nom du personnage :
        </label>
        <input type="text" name="nom" id="nom" value="<?php echo $data['nom']; ?>">
    </div>
    <div>
        <?php if (isset($errors['vie'])) { ?>
            <p><?php echo $errors['vie']; ?></p>
        <?php } ?>
        <label for="vie">Vie du personnage :</label>
        <input type="number" name="vie" id="vie" value="<?php echo $data['vie']; ?>">
    </div>
    <div>
        <?php if (isset($errors['attaque'])) { ?>
            <p><?php echo $errors['attaque']; ?></p>
        <?php } ?>
        <label for="attaque">Attaque du personnage :</label>
        <input type="number" name="attaque" id="attaque" value="<?php echo $data['attaque']; ?>">
    </div>
    <div>
        <?php if (isset($errors['magie'])) { ?>
            <p><?php echo $errors['magie']; ?></p>
        <?php } ?>
        <label for="magie">Magie du personnage :</label>
        <input type="number" name="magie" id="magie" value="<?php echo $data['magie']; ?>">
    </div>
    <div>
        <button type="submit">Créer le personnage</button>
    </div>
</form>
