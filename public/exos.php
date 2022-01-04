<?php
// EXERCICE 1
function titre(string $titre)
{
    return "<h1>$titre</h1>";
}

function moyenne(array $notes)
{
    $nombreDeNotes = count($notes);
    $total = 0;

    foreach ($notes as $position => $note) {
        $total = $total + $note;
    }

    return $total / $nombreDeNotes;
}

function afficherEleves(array $eleves)
{
    $html = '';

    foreach ($eleves as $index => $eleve) {
        $numero = $index + 1;
        $html = "$html<li>Élève n°$numero : {$eleve['nom']} {$eleve['prenom']}</li>";
    }

    return "<ul>$html</ul>";
}

function afficherNotes(array $notes)
{
    $html = '';

    foreach ($notes as $index => $note) {
        $numero = $index + 1;
        $html = "$html<li>Note n°$numero : $note/20</li>";
    }

    return "<ul>$html</ul>";
}

function afficherMoyenne(array $notes)
{
    $moyenne = moyenne($notes);

    return "<p>Moyenne : $moyenne / 20</p>";
}

function afficherEleve(array $eleve)
{
    // $eleve = ['nom' => 'Dupont', 'prenom' => 'Jean', 'notes' => [12, 5, 8]]
    $paragraph = "<p>Élève {$eleve['nom']} {$eleve['prenom']}</p>";
    $notes = afficherNotes($eleve['notes']);
    $moyenne = afficherMoyenne($eleve['notes']);

    return "<div>$paragraph $notes $moyenne</div>";
}

function afficherClass(array $classe)
{
    $titreDeLaClasse = "<h1>Classe {$classe['rang']} {$classe['section']}</h1>";
    $profPrincipal = "<p>Professeur principal : {$classe['profPrincipal']}</p>";

    $totalEleves = count($classe['eleves']);
    $nombreEleves = "<p>Nombre d'élèves : $totalEleves</p>";

    $ficheEleves = '';

    foreach ($classe['eleves'] as $index => $eleve) {
        $affichageEleve = afficherEleve($eleve);
        $ficheEleves = "$ficheEleves $affichageEleve";
    }

    return "<div>$titreDeLaClasse $profPrincipal $nombreEleves<h2>Fiche des élèves</h2> $ficheEleves</div>";
}

echo titre('Hello');

$notes = [12, 19, 7, 13];

$eleves = [
    ['nom' => 'Dupont', 'prenom' => 'Jean'],
    ['nom' => 'Dupont', 'prenom' => 'Jane'],
    ['nom' => 'Doe', 'prenom' => 'John'],
    ['nom' => 'Doe', 'prenom' => 'Rose'],
];

$classe = [
    'rang' => '2nd',
    'section' => 'D',
    'profPrincipal' => 'Jean Martin',
    'eleves' => [
        [
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'notes' => [13, 19, 13, 8, 15]
        ],
        [
            'nom' => 'Dupont',
            'prenom' => 'Jane',
            'notes' => [12, 7, 19, 8, 15]
        ],
        [
            'nom' => 'Doe',
            'prenom' => 'John',
            'notes' => [14, 9, 13, 8]
        ],
        [
            'nom' => 'Doe',
            'prenom' => 'Jane',
            'notes' => [19, 20, 5, 8, 18]
        ],
    ]
];

?>

<p>Votre moyenne : <?php echo moyenne($notes); ?> / 20</p>

<?php echo afficherEleves($eleves); ?>

<?php echo afficherClass($classe); ?>
