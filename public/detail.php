<?php

$mysqli = new mysqli("mariadb", "db_user", "mijn_p@ss#", "voorbeeld_db");
if ($mysqli->connect_error) {
    die("". $mysqli->connect_error);
}

$id = $_GET['id'];

/* create a statement */
$sql = 'SELECT * 
        FROM sdgs 
        WHERE id=?
        ORDER BY title';

/* create a prepared statement */
$stmt = $mysqli->prepare($sql);

/* Bind the slug */
$stmt->bind_param('i', $id);

/* execute query */
$stmt->execute();

/* bind result variables */
$result = $stmt->get_result();

/* Nu wil ik mijn data in een array plaatsen */
$sdgItem = mysqli_fetch_assoc($result);

var_dump($sdgItem);

?>