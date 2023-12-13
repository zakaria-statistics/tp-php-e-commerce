<?php 
$id = $_POST['idd'];
$login = $_POST['login'];
$password = $_POST['password'];
$img = $_POST['img'];

if(isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $name = 'photos/file_' . time() . '_' . $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp, $name);
}
$photo = isset($name) ? $name : $img;   
$pdo = new PDO("mysql:host=localhost;dbname=dbcc",
                "root",
                ""
                );
$sql = "UPDATE users SET login='$login', password='$password', photo='$photo' WHERE id = $id";

$stmt = $pdo->exec($sql);

header("location:db.php");

?>