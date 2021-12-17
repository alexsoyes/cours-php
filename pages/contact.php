<h1>Contactez-moi</h1>

<p>Je suis une page de contact.</p>

<form action="" method="post">
    <label for="_email">Email</label>
    <input type="email" name="email" id="_email" value="email@test.fr" required>

    <label for="_text">Message</label>
    <textarea name="text" id="_text" cols="30" rows="10" required>test</textarea>
    <input type="submit" value="Envoyer">
</form>


<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (array_key_exists('email', $_POST)) {
    echo "<p>Votre email est : " . $_POST['email'] . "</p>";
}

?>

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

function format(string $firstname, string $lastname, bool $isFemale): string
{
    if ($isFemale) {
        $civility = "Madame";
    } else {
        $civility = "Monsieur";
    }

    return "<p>Bonjour $civility $firstname" . " " . strtoupper($lastname) . ",</p>";
}

echo format('Alex', 'Soyer', false);
echo format('Marie', 'Soyer', true);