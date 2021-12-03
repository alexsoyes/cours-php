<h1>Accueil</h1>

<?php

$date = new \DateTime();

$dateFormatted = $date->format('d/m/Y');

echo "<p>Nous sommes le <strong>$dateFormatted</strong>.</p>";

echo $date->getTimestamp();
