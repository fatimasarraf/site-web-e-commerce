<?php session_start();
if (!isset($_SESSION['visiteurs'])) {
  header('location:connexion.php');
}
$idvisiteur = $_SESSION['visiteurs']['id'];
$id = $_POST['id'];
unset($_SESSION['panier'][$idvisiteur][$id]);
header("location:".$_SERVER["HTTP_REFERER"]);


 ?>
