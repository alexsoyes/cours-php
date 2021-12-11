<h2>Vos séries Netflix du moment</h2>

<ul>
    <li>Arcane</li>
    <li>Squid Game</li>
    <li>Brooklin 99</li>
</ul>

<ul>
    <?php
    $maListeDeSeries = ['Arcane', 'Squid Game', 'Brooklyn 99'];

    foreach ($maListeDeSeries as $laSerieEnQuestion) {
        echo "<li>$laSerieEnQuestion</li>";
    }
    ?>
</ul>

<h2>Films préférés</h2>

<?php
$filmsPreferes = [
    [
        'name' => 'Pokémon Le Film',
        'date' => 1999,
        'actors' => ['Sacha', 'Pierre', 'Ondine']
    ],
    [
        'name' => 'Pokémon 2',
        'date' => 2002,
        'actors' => ['Sacha', 'Pierre', 'Ondine']
    ],
];
?>

<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Sortie</th>
        <th>Acteurs</th>
    </tr>
    </thead>
    <?php foreach ($filmsPreferes as $film): ?>
    <tr>
        <td><?php echo $film['name']; ?></td>
        <td><?php echo $film['date']; ?></td>
        <td>
            <?php foreach ($film['actors'] as $actor) {
              echo "$actor, ";
            }
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>



<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Sortie</th>
        <th>Acteurs</th>
    </tr>
    </thead>
    <tr>
        <td>Pokémon le film</td>
        <td>1999</td>
        <td>Sacha, Online, Pierre</td>
    </tr>
</table>


<h1>A propos de moi</h1>

<h2>Membre de ma famille (tableau associatif - clef/valeur)</h2>

<?php
$families = [
    'brothers' => [
        'Tom' => [
            'names' => [
                'first' => '',
                'second' => '',
                'third' => '',
            ]
        ],
        'Ben',
    ],
    'sisters' => [
        'Liz'
    ],
    'mother' => 'Marie',
    'father' => ['orange', 'tofu'],
];

$families['father'] = ['orange', 'tofu'];

if (array_key_exists('first', $families['brothers']['Tom']['names'])) {
    $firstname = $families['brothers']['Tom']['names']['first'];
}


$teamsFoot = ['Paris', 'Marseille', 'Lyon'];
$teamNba = ['warriors', 'lakers', 'spyrs'];
$allTeams = [];

foreach ($teamsFoot as $team) {
    $allTeams[] = $team;
}

printf('je suis %s', 'alex');
?>

<pre>
    <?php print_r($allTeams); ?>
</pre>

<?php

$allTeams = [];

$allTeams = [
    ...$teamsFoot,
    $teamsFoot[0],
    $teamsFoot[1],
    $teamsFoot[2],
    ...$teamNba
];
?>

<pre>
    <?php print_r($allTeams); ?>
</pre>

<ul>
    <li>Mon premier frère : <?php echo $families['brothers'][0]; ?></li>
    <li>Combien j'ai de soeurs ? : <?php echo count($families['sisters']); ?></li>
    <li>Comment s'appelle ma mère : <?php echo $families['mother']; ?></li>
    <?php if (!array_key_exists('cousins', $families)): ?>
        <li>Je n'ai pas de cousin.</li>
    <?php endif; ?>
    <?php if (array_key_exists('sisters', $families)): ?>
        <li>Ouf, j'ai une ou plusieurs soeurs.</li>
    <?php endif; ?>
</ul>

<pre>
    <?php print_r($families); ?>
</pre>

<h2>Liste de courses (tableau classique dit simple, une liste quoi)</h2>

<?php
$food = [
    'oranges', // 0
    'tofu', // 1
    'pâtes', // 2
    'riz',
    'salade',
    'croissants aux amandes',
    'côté de boeuf',
    'Kinders', // 7
];
?>

<?php
$foodCount = count($food);
printf("<p>J'ai %s aliments à acheter.</p>", $foodCount);
?>
<p>Le premier élément de ma liste de course c'est : <?php echo $food[0]; ?></p>
<p>Le dernier élément de ma liste de course c'est : <?php echo $food[$foodCount - 1]; ?></p>

<pre>
    <?php print_r($food); ?>
</pre>

<h3>Exemple avec <code>for</code></h3>

<ul>
    <?php
    // 0 $aliment = $food[0] // oranges
    // 1 $aliment = $food[1] // tofu
    // 7 $aliment = $food[7] // Kinders
    // 0 < 8
    // 1 < 8
    // 7 < 8
    // 8 < 8 ===> sort de la boucle
    for ($i = 0; $i < $foodCount; $i++) {
        $aliment = $food[$i];
        echo "<li>" . $aliment . "</li>\n";
    }

    for ($i = $foodCount - 1; $i >= 0; $i--) {
        $aliment = $food[$i];
        echo "<li>" . $aliment . "</li>\n";
    }
    ?>
</ul>

<h3>Exemple avec <code>foreach</code></h3>

<ul>
    <?php
    // ['oranges', 'tofu', ...]
    // $food[0] = $aliment // oranges
    // $food[1] = $aliment // tofu
    // ...
    foreach ($food as $aliment) {
        echo "<li>" . $aliment . "</li>\n";
    }
    ?>
</ul>

<?php
// plus vieille
$families = array('Ben', 'Tom', 'Liz', 'Marie');
array_push($families, 'Jade');

// plus moderne
$families = ['Ben', 'Tom', 'Liz', 'Marie'];
$families[] = 'Jade';
?>

<h2>Tableau "classique"</h2>

<pre>
    <?php print_r($families); ?>
</pre>

<?php

echo $families[1]; // Tom, et pas Ben

?>

<h2>Liste de courses</h2>

<?php
$food = [
    // 0
    [
        'oranges', // 0
        'tofu', // 1
        'pâtes', // 2
        'riz', // 3
    ],
    // 1
    [
        'salade', // 0
        'croissants aux amandes', // 1
        'côté de boeuf', // 2
        'Kinder' => [
            'Choco bons',
            'Bueno',
            'Country',
            'Maxi'
        ],
        'banane' // 3
    ]
];
?>

<?php
printf(
    "<p>J'aime les %s, mais pas le %s, parce-que je préfère 10x les %s.</p>",
    "1er",
    "2eme",
    "3eme"
);
?>

<p>J'aime les <?php echo $food[1][1]; ?>, mais pas le <?php echo $food[0][3]; ?>, parce-que je préfère 10x
    le <?php echo $food[0][1]; ?></p>

<pre>
    <?php print_r($food); ?>
    <?php print_r($food[1]['Kinder']); ?>
</pre>