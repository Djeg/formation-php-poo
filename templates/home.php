<h1>Bienvenu sur mon blog</h1>

<h2>La liste des articles</h2>

<? foreach ($articles as $article) : ?>
    <p><?= $article->title ?></p>
<? endforeach ?>
