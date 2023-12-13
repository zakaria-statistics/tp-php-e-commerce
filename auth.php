<?php
    session_start();
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    
    $pdo=new PDO('mysql:host=localhost; dbname=dbcc','root','');
    $sql="SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $stmt = $pdo->query($sql);
    $usrs =$stmt->fetch(PDO::FETCH_ASSOC);

    if(!$usrs){
        $_SESSION['msg'] = "login ou mot de passe est incorrect!";
        header("location:form.php");
        exit();
    }
    $_SESSION["auth"] = $usrs;
    header("location:index.php");

?>