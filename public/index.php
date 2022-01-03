<?php

$age = 23; // int(23)
$estMajeur = true; // boolean(true)
$estMajeur = false; // boolean(false)

$note1 = 18;
$note2 = 12;

$moyenne = ($note1 + $note2) / 2;

$nom = 'Dupont';
$prenom = 'Jean';

// Il est + performant
$etatCivile = $nom . ' ' . $prenom;

// Il est - performant
$etatCivile = "$nom sfksdhfsdkhfslksdhsfk $prenom";
// je suis un commentaire



// je suis un second commentaire


$notes = [12, 10, 9, 8, 18];

echo $notes[/* la position que l'on veut dans le tableaux, on l'appel "index" */2]; // int(9)


$notes = [12, 14, 8, ['A', 'B']];

echo $notes[3][1] . $notes[1];


$utilisateur = ['prenom' => 'John', 'nom' => 'Doe'];

echo $utilisateur['nom'] . $utilisateur['prenom'];

echo "{$utilisateur['nom']} {$utilisateur['prenom']}";

$definitions = [
    'salut' => 'Faire coucou à quelqu un',
    'aurevoir' => 'Dire bye bye',
];

echo $definitions['aurevoir']; // string(Dire bye bye)

echo $utilisateur['nom'];

$eleve = [
    'nom' => 'Dupont',
    'prenom' => 'Jean',
    'notes' => [14, 12, 8, 7, 19],
];

echo $eleve['nom']; // string(Dupont)
echo $eleve['prenom']; // string(Jean)
echo $eleve['notes'][2]; // int(8)

echo $eleve['nom'] . ' ' . $eleve['prenom'] . ' (notes: ' . $eleve['notes'][0] . ')';

echo "{$eleve['nom']} {$eleve['prenom']} (notes: {$eleve['notes'][0]}, {$eleve['notes'][1]})";


$age = 9; // int(9)

if ($age >= 18) {
    echo 'Vous etes majeur';
    echo 'genial';
    echo 'super';
} else {
    echo 'Vous etes mineur';
}

if ($age == '9'/* string(9) */) {
    echo 'Vous avez 9 ans';
}

if ($age === '9' || $age === '8') {
    echo 'Vous avez 9 ans';
}

if ($age >= 18 && $age <= 25) {
}

$estMajeur = $age >= 18; // boolean(false)

if (!$estMajeur) {
}

$notes = [12, 4, 18, 6, 16, 19, 5, 14, 16];

foreach ($notes as $index => $note) {
    if ($note >= 10) {
        echo "<p>Note n°$index : $note/20</p>";
        echo "<p>Note n°$index : $note/20</p>";
        echo "<p>Note n°$index : $note/20</p>";

        echo "<p>Note n°$index : $note/20</p>";
        echo "<p>Note n°$index : $note/20</p>";

        echo "<p>Note n°$index : $note/20</p>";

        echo "<p>Note n°$index : $note/20</p>";
        echo "<p>Note n°$index : $note/20</p>";
    }
}

foreach ($notes as $index => $note) {
    if ($note < 10) {
        continue;
    }

    echo "<p>Note n°$index : $note/20</p>";
    echo "<p>Note n°$index : $note/20</p>";

    echo "<p>Note n°$index : $note/20</p>";
    echo "<p>Note n°$index : $note/20</p>";

    echo "<p>Note n°$index : $note/20</p>";
    echo "<p>Note n°$index : $note/20</p>";
    echo "<p>Note n°$index : $note/20</p>";
    echo "<p>Note n°$index : $note/20</p>";
}

?>

<h1>
    Bonjour <?php echo $etatCivile; ?> vous avez <?php echo $age; ?> ans
</h1>

<p>
    Bonjour vous avez <?php echo $age; ?> ans
</p>
<h3>Vos notes</h3>
<ul>
    <?php foreach ($notes as $index => $note) { ?>
        <li>Note <?php echo $index + 1; ?> : <?php echo $note; ?>/20</li>
    <?php } ?>
</ul>


<?php

/**
 * NE JAMAIS FAIRE DE ECHO DANS UNE FONCTION
 */
function additionner(int $chiffre1 = 0, int $chiffre2 = 0)
{
    return $chiffre1 + $chiffre2; // affiche sur la page le chiffre "7"
}

function nomComplet(string $nom, string $prenom)
{
    return $nom . ' ' . $prenom;
}

function bonjour(string $personne)
{
    return 'Bonjour ' . $personne;
}

$phrase = bonjour(nomComplet('john', 'doe')); // string(Bonjour john doe)

$x = additionner(); // int(0)
$x = additionner(10); // int(10)
$x = additionner(10, 10); // int(20)
$a = additionner(5, 2); // null
$b = additionner($a, 10); // Fatal Error

$eleve = [
    'nom' => 'Dupont',
    'prenom' => 'Rose',
]

?>

<h1>
    <?php echo bonjour(nomComplet($eleve['nom'], $eleve['prenom'])); ?>
</h1>
