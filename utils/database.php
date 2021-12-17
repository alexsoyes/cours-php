<?php

function getDatabaseConnection(): PDO
{
    $dsn = 'mysql:host=mysql';
    $user = 'root';
    $password = 'root';
    $dbh = new PDO($dsn, $user, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    return $dbh;
}

$dbh = getDatabaseConnection();

echo "Ok";