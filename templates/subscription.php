<h1>Inscription</h1>

<? if (isset($success)) : ?>
    <h2><?= $success ?></h2>
<? endif ?>

<form method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" />
    </div>
    <div>
        <label for="repeated-password">Répéter Mot de passe</label>
        <input type="password" name="repeated-password" id="repeated-password" />
    </div>
    <button type="submit">S'inscrire</button>
</form>
