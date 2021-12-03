<h1>Contactez-moi</h1>

<p>Je suis une page de contact.</p>

<?php

$firstname = "Alex";
$name = "Soyer";
$newsletter = false;
$age = 20;

/**
 * Vérifie si un individu est majeur ou mineur.
 *
 * @param int $age L'âge de la personne.
 * @return string Une chaîne de caractère exprimant si l'utilisateur est majeur ou non.
 */
function isOfAge(int $age): string
{
    if ($age >= 18) {
        return "$age : tu es majeur";
    } else {
        return "$age : tu es mineur";
    }
}

//echo isOfAge(18);
//echo isOfAge(235);
//echo isOfAge(4);

function format(string $firstname, string $lastname): string
{
    return "<p>Bonjour $firstname" . " " . strtoupper($lastname) . ",</p>";
}

echo format('Alex', 'Soyer');