<?php
require_once'database.php';
$id=$_GET['id'];
$sss=$bdd->prepare('DELETE FROM produits WHERE id=?');
$sss->execute([$id]);
header('location:produits.php');
 ?>
