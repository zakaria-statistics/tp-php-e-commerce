<?php 

$login = $_POST["login"];
$password = $_POST["password"];

if(isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $name = 'photos/file_' . time() . '_' . $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp, $name);
}
$photo = isset($name) ? $name : '';

$pdo = new PDO("mysql:host=localhost;dbname=dbcc",
                "root",
                ""
                );
$sql = "INSERT INTO users VALUES(NULL, '$login', '$password', '$photo')";

$stmt = $pdo->exec($sql);

header("location:db.php");

?>