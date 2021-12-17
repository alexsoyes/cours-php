<h1>Formulaire de contact</h1>

<h2>Liste des demandes de contact</h2>

<?php

function getContactsList(): ?array
{
    $dbh = getDatabaseConnection();

    $sth = $dbh->prepare('SELECT * FROM epsi.contact');
    $sth->execute();

    return $sth->fetchAll(PDO::FETCH_ASSOC);
}

function createContact(
    string $name,
    string $email,
    string $message,
    bool   $newsletter
): bool
{
    $dbh = getDatabaseConnection();

    $sql = "INSERT INTO epsi.contact (name, email, message, newsletter) VALUES
        (\"$name\", '$email', '$message', '$newsletter')";

    echo "<pre>$sql</pre>";

    $stmt = $dbh->prepare($sql);

    return $stmt->execute();
}

if (!empty($_POST)) {
    $isCreated = createContact($_POST['name'], $_POST['email'], $_POST['text'], $_POST['newsletter'] === "on");

    if ($isCreated) {
        echo "Ok";
    } else {
        echo "KO";
    }
}

?>

<form action="" method="post">
    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>message</th>
            <th>newsletter</th>
            <th>supprimer ?</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach (getContactsList() as $contact): ?>
            <tr>
                <td><?php echo $contact['id']; ?></td>
                <td><?php echo $contact['name']; ?></td>
                <td><?php echo $contact['email']; ?></td>
                <td><?php echo $contact['message']; ?></td>
                <td><?php echo $contact['newsletter']; ?></td>
                <td>
                    <input type="checkbox" name="idToDelete[]" value="<?php echo $contact['id']; ?>">
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <input type="submit" value="Supprimer les éléments">
</form>

<p>Nouvelle demande de contact.</p>

<form action="" method="post">
    <label>Name
        <input type="text" name="name" value="Alex">
    </label>

    <label>Email
        <input type="email" name="email" value="a.soyer@outlook.com">
    </label>

    <label>Message
        <textarea name="text" cols="30" rows="10" required>Test</textarea>
    </label>

    <label>
        Newsletter
        <input type="checkbox" name="newsletter" checked>
    </label>
    <input type="submit" value="Envoyer">
</form>

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

    return '<p>Bonjour' . ' ' . $civility . ' ' . strtoupper($name) . ' ' . $firstname . ',</p>';
}

$formattedNameAndFirstname = format('Soyer', 'Alex', false);

echo $formattedNameAndFirstname;


