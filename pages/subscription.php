<?php

$birthdayDate = new DateTime('1993-10-19');
$currentDate = new DateTime('2021-12-10');
$interval = $birthdayDate->diff($currentDate);
echo "<p>J'ai " . $interval->format('%y') . " ans</p>";


$subscriptionDate = new DateTime('now');
$endSubscriptionDate = new DateTime('now');
$endSubscriptionDate->add(new DateInterval('P1Y'));

echo "<p>Votre abonnement se termine le " . $endSubscriptionDate->format('d/m/Y') . "</p>";

if ($subscriptionDate <= $endSubscriptionDate) {
    echo "<p>Votre abonnement est toujours valide</p>";
}

var_dump($subscriptionDate);

