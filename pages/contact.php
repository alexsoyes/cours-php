<h1>Formulaire de contact</h1>

<p>Nouvelle demande de contact.</p>

<?php

$name = "Soyer";
$firstname = "Alex";
$message = "Bonjour !";
$age = 14;
$newsletter = true;

/**
 * Retourne une chaîne de caractères formatés proprement avec le nom et le prénom de la personne.
 *
 * @param string $name le nom de la personne
 * @param string $firstname le prénom de la personne
 * @param bool $isFemale true si jamais la personne est une femme, false si c'est un homme
 * @return string prénom + nom en majuscule
 */
function format(string $name, string $firstname, bool $isFemale): string
{
    if ($isFemale) {
        $civility = 'Madame';
    } else {
        $civility = 'Monsieur';
    }

    return 'Bonjour' . ' ' . $civility . ' ' .  $firstname . ' ' . strtoupper($name) . ',';
}

$formattedNameAndFirstname = format('Soyer', 'Alex');

echo $formattedNameAndFirstname;


