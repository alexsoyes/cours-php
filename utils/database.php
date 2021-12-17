<?php

function getDatabaseConnection(): PDO {
    return new PDO('mysql:host=mysql', 'root', 'root');
}
