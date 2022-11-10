<?php

$dbh = new PDO('mysql:host=localhost;dbname=phpprojet', 'root', '');

if ($dbh) {
    echo ('OK');
}
