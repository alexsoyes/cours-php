

<h1>Joyeux anniversaire</h1>

<form action="">
    <input type="date" name="birthdate" id="">
    <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
    <input type="submit" value="Valider">
</form>

<?php

if (array_key_exists('birthdate', $_GET)) {
    $birthday = $_GET['birthdate'];

    $currentDate = new DateTime();
    $birthdateDate = new DateTime($birthday);

    if ($currentDate->format('m/d') === $birthdateDate->format('m/d')) {
        echo '🎉';
    } else {
        echo '😞';
    }
}
