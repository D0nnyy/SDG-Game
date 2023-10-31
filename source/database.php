<?php

$conn = new mysqli("mariadb", "db_user", "mijn_p@ss#", "voorbeeld_db");
if ($conn->connect_error) {
    die("". $conn->connect_error);
}

define("SQL", $conn);