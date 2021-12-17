<?php

function getDatabaseConnection(): PDO {
    $dbh = new PDO('mysql:host=mysql', 'root', 'root');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    return $dbh;
}
