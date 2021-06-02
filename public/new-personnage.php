<?php

require(__DIR__ . '/../vendor/autoload.php');

$errors = [];
$data = [
    'nom' => isset($_POST['nom']) ? $_POST['nom'] : '',
    'vie' => isset($_POST['vie']) ? (int)$_POST['vie'] : 0,
    'attaque' => isset($_POST['attaque']) ? (int)$_POST['attaque'] : 0,
    'magie' => isset($_POST['magie']) ? (int)$_POST['magie'] : 0
];

if (!empty($_POST)) {

    if (strlen($data['nom']) < 2) {
        $errors['nom'] = "vous n'avez pas spécifié de nom pour votre personnage, ou bien le nom est trop court";
    }

    if ((int)$data['vie'] < 9 || (int)$data['vie'] > 100) {
        $errors['vie'] = "Vous n'avez pas spécifier de vie, ou bien la vie n'est pas compris entre 10 et 100";
    }

    if ((int)$data['attaque'] < 5 || (int)$data['attaque'] > 50) {
        $errors['attaque'] = "Vous n'avez pas spécifier d'attaque, ou bien l'attaque n'est pas compris entre 5 et 50";
    }

    if ((int)$data['magie'] < 5 || (int)$data['magie'] > 50) {
        $errors['magie'] = "Vous n'avez pas spécifier de magie, ou bien la magie n'est pas compris entre 5 et 50";
    }
}

if (!empty($_POST) && empty($errors)) {
    // enregistrer les données dans une base de données
    $pdo = new PDO('mysql:dbname=mini-game;host=mysql', 'root', 'root');
    $sql = 'INSERT INTO personnages (nom, vie, attaque, magie) VALUES (:nom, :vie, :attaque, :magie)';

    $request = $pdo->prepare($sql);
    $request->execute([
        'nom' => $data['nom'],
        'vie' => $data['vie'],
        'attaque' => $data['attaque'],
        'magie' => $data['magie']
    ]);

    var_dump('Personnage enregistré !');
}

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
