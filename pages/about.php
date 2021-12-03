<h1>À propos de moi</h1>

<p>Laissez-moi vous parler de ma famille...</p>

<?php
$families = [
    ['name' => 'Benoît', 'type' => 'Mon frère'], // 0
    ['name' => 'Liz', 'type' => 'Ma soeur'], // 1
    ['name' => 'Mère', 'type' => 'Ma mère'], // 2
];

$families[1]['name'] = "Alfred";

echo $families[1]['name']; // Liz
?>

<ul>
    <?php foreach ($families as $familyMember): ?>
        <li><?php echo $familyMember['type']; ?> s'appelle <?php echo $familyMember['name']; ?></li>
    <?php endforeach; ?>
</ul>

<h2>Mes passions (exemple des boucles pour les tableaux)</h2>

<p>J'adore les animés !</p>

<?php
$animes = [
    'MHA', // 0
    'JJK', // 1
    86, // 2
    'Naruto', // 3
    'Bleach', // 4
    'Fairy Tail', // 5
    'One Piece', // 6
    'Haikyuu', // 7
];

$animesLength = count($animes); // 8

echo "<h3>Exemple avec <code>for</code></h3>";

// condition de sortie : 7 < 8, là, on sort : 8 < 8
for ($index = 0; $index < $animesLength; $index++) {
    echo "<p>" . $animes[$index] . "</p>";
}

echo "<h3>Exemple avec <code>foreach</code></h3>";

foreach ($animes as $anime) {
    echo "<p>" . $anime . "</p>";
}

//for ($index = 0; $index < $animesLength; $index++) {
//    $anime = $animes[$index];
//
//    echo "<p>" . $anime . "</p>";
//}

echo "<h3>Exemple avec <code>foreach</code> + <code>index</code></h3>";

// $animes = ['MHA', 'JJK', '86']

// $index = 0, 1, 2
// $anime = MHA, JJK, 86
foreach ($animes as $index => $anime) {
    // $animes[0] = $anime
    // $animes as [0] => $anime
    // $animes[0] => MHA
    echo "<p>À l'index $index, j'ai la valeur : $anime</p>";
}

echo "<h3>Exemple avec <code>while</code></h3>";

$i = 0;

while ($i < count($animes)) {
    echo "<p>" . $animes[$i] . "</p>";

//    $i += 1;
//    $i ++;
    $i = $i + 1;
}

?>

<h2>Explication tableau classique vs clef/valeur</h2>

<?php

// un tableau classique

$families = [
    'Benoît',
    'Tom',
    'Liz',
];

$families[] = 'Maxime';

//echo $families[0]; // Benoît
//echo $families[1]; // Tom
//echo $families[2]; //

echo "<pre>";
print_r($families);
echo "</pre>";

?>

<ul>
    <?php foreach ($families as $familyMember): ?>
        <li><?php echo $familyMember; ?></li>
    <?php endforeach; ?>
</ul>

<?php

echo "Le premier membre de ma famile est : " . $families[0];

$families = [
    'brothers' => ['Benoît', 'Tom'],
    'sisters' => ['Liz'],
    'mother' => 'Marie',
];

echo "<pre>";
print_r($families);
echo "</pre>";

echo "Ma mère s'appelle " . $families['mother'];

echo "<pre>";
print_r($families['brothers']);
echo "</pre>";

echo "Mon premier frère s'appelle " . $families['brothers'][0];

$brothers = [
    [
        'name' => 'Benoît',
        'age' => 17,
    ],
    [
        'name' => 'Tom',
        'age' => 9,
    ]
];

echo "Mon premier frère s'appelle " . $brothers[0]['name'] . ' et a ' . $brothers[0]['age'] . 'ans';
echo "Mon second frère s'appelle " . $brothers[1]['name'] . ' et a ' . $brothers[1]['age'] . 'ans';

echo "<pre>";
print_r($_GET);
echo "</pre>";

?>
