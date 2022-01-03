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
echo $eleve['notes']; // array([14, 12 ...])
echo $eleve['notes'][2]; // int(8)

?>

<h1>
    Bonjour <?php echo $etatCivile; ?> vous avez <?php echo $age; ?> ans
</h1>

<p>
    Bonjour vous avez <?php echo $age; ?> ans
</p>
<h3>Vos notes</h3>
<ul>
    <li>Note 1 : <?php echo $notes[0]; ?>/20</li>
</ul>
