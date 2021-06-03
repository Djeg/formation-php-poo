<?php include __DIR__ . '/partials/documentStart.php'; ?>
<h1>Créer un nouveau personnage</h1>
<form action="./index.php?page=newPersonnage" method="post">
    <?php if (isset($errors['nom'])) { ?>
        <p><?php echo $errors['nom']; ?></p>
    <?php } ?>
    <div>
        <label for="nom">
            Nom du personnage :
        </label>
        <input type="text" name="nom" id="nom" value="<?php echo $perso->getNom(); ?>">
    </div>
    <?php if (isset($errors['vie'])) { ?>
        <p><?php echo $errors['vie']; ?></p>
    <?php } ?>
    <div>
        <label for="vie">Vie du personnage :</label>
        <input type="number" name="vie" id="vie" value="<?php echo $perso->getVie(); ?>">
    </div>
    <?php if (isset($errors['attaque'])) { ?>
        <p><?php echo $errors['attaque']; ?></p>
    <?php } ?>
    <div>
        <label for="attaque">Attaque du personnage :</label>
        <input type="number" name="attaque" id="attaque" value="<?php echo $perso->getAttaque(); ?>">
    </div>
    <?php if (isset($errors['magie'])) { ?>
        <p><?php echo $errors['magie']; ?></p>
    <?php } ?>
    <div>
        <label for="magie">Magie du personnage :</label>
        <input type="number" name="magie" id="magie" value="<?php echo $perso->getMagie(); ?>">
    </div>
    <div>
        <button type="submit">Créer le personnage</button>
    </div>
</form>
<?php include __DIR__ . '/partials/documentEnd.php'; ?>
