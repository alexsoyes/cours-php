<h1>Accueil</h1>

<form action="" method="get">
<!--    ?page=contact-->
    <select name="page">
        <option value="">-</option>
        <option value="">Accueil</option>
        <option value="about">À propos</option>
        <option value="contact">Contactez-nous</option>
    </select>
    <input type="text" name="different" id="">
    <input type="submit" value="Changer de page">
</form>

<?php

$date = new \DateTime();

$dateFormatted = $date->format('d/m/Y');

echo "<p>Nous sommes le <strong>$dateFormatted</strong>.</p>";

echo $date->getTimestamp();
