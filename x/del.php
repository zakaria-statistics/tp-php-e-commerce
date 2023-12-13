<?php

$id = $_GET['iddd'];


$pdo = new PDO(
    "mysql:host=localhost;dbname=dbcc",
    "root",
    ""
);

$sql = "DELETE FROM users WHERE id=$id";

$pdo->exec($sql);

header('location:db.php');
?>