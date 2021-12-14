
<h1>Abonnements</h1>

<h2>Vérifie si tu es majeure</h2>

<form action="">
    <input type="date" name="date" id="">
    <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>" />
    <input type="submit" value="Envoyer">
</form>

<?php

if (array_key_exists('date', $_GET)) {

    $date = $_GET['date'];
    $datetime = new DateTime($date);
    $currentDate = new DateTime();

    $interval = $currentDate->diff($datetime);

    if ($interval->format('%Y') > 18) {
        echo "Majeur";
    } else {
        echo "Mineur";
    }
}

?>


<h2>Calcul date de naissance</h2>

<?php

$birthdate = new DateTime('1993-08-19');
$currentDate = new DateTime();

$interval = $currentDate->diff($birthdate);

echo "J'ai " . $interval->format('%Y') . " ans.";

?>

<h2>Ajouter un an</h2>

<?php

$endOfSubscription = new DateTime('now');
$endOfSubscription->add(new DateInterval('P1Y'));

echo "Votre abonnement expire le : " . $endOfSubscription->format('d/m/Y');

?>

<h2>L'abonnement est-il toujours valide ?</h2>

<?php

if ($currentDate < $endOfSubscription) {
    echo "Oui";
} else {
    echo "Non";
}

?>

