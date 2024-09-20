<?php
require_once'database.php';
$id=$_GET['id'];
$sss=$bdd->prepare('DELETE FROM categories WHERE id=?');
$sss->execute([$id]);
header('location:categories.php');
 ?>
