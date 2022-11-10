<h1>Bienvenue sur mon blog</h1>

<h2>Les Derniers Articles</h2>

<? foreach ($articles as $article) : ?>
    <p><?= $article->title ?></p>
<? endforeach ?>
