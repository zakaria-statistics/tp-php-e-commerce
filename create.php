<?php
$login = $_POST['login'];
$password = md5($_POST['password']);

$pdo = new PDO('mysql:host=localhost; dbname=dbcc', 'root', '');
$sql = "INSERT INTO users VALUE (NULL, '$login', '$password', '')";
$stmt = $pdo->exec($sql);

header("location:form.php");

?>