<h1>A propos de moi</h1>

<h2>Membre de ma famille (tableau associatif - clef/valeur)</h2>

<?php
$families = [
    'brothers' => [
        'Tom',
        'Ben',
    ],
    'sisters' => [
        'Liz'
    ],
    'mother' => 'Marie'
];
?>

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
    'oranges',
    'tofu',
    'pâtes',
    'riz',
    'salade',
    'croissants aux amandes',
    'côté de boeuf',
    'Kinders',
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
    for ($i = 0; $i < count($food); $i++) {
        $aliment = $food[$i];
        echo "<li>" . $aliment . "</li>\n";
    }
    ?>
</ul>

<h3>Exemple avec <code>foreach</code></h3>

<ul>
    <?php
    // ['oranges', 'tofu', ...] = 0: oranges => $aliment
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