<?php
session_start();
if(!isset($_SESSION["panier"]))
    $_SESSION['panier'] = [];

$id = $_GET['id'];
$qte = $_GET['qte'];

$_SESSION['panier'][$id] = $qte;
if($qte <= 0)
    unset($_SESSION['panier'][$id]);

header('location:index.php');

?>