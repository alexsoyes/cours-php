<h1>Formulaire de contact</h1>

<p>Nouvelle demande de contact.</p>

<form action="" method="post">
    <label>Email
        <input type="email" name="email">
    </label>

    <label>Message
        <textarea name="text" cols="30" rows="10" required></textarea>
    </label>
    <input type="submit" value="Envoyer">
</form>

<h2>Liste des demandes de contact</h2>

<?php

$dbh = getDatabaseConnection();

$sth = $dbh->prepare('SELECT * FROM epsi.contact');
$sth->execute();

$mesDemandesDeContact = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>message</th>
        <th>newsletter</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($mesDemandesDeContact as $contact): ?>
    <tr>
        <td><?php echo $contact['id']; ?></td>
        <td><?php echo $contact['name']; ?></td>
        <td><?php echo $contact['email']; ?></td>
        <td><?php echo $contact['message']; ?></td>
        <td><?php echo $contact['newsletter']; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

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

    return '<p>Bonjour' . ' ' . $civility . ' ' .  strtoupper($name) . ' ' . $firstname . ',</p>';
}

$formattedNameAndFirstname = format('Soyer', 'Alex', false);

echo $formattedNameAndFirstname;


