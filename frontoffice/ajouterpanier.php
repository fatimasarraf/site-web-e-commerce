<?php
session_start();
if (!isset($_SESSION['visiteurs'])) {
  header('location:connexion.php');
}
$id = $_POST['id'];
$qty = $_POST['qty'];
$idvisiteur = $_SESSION['visiteurs']['id'];
  if (!isset($_SESSION['panier'][$idvisiteur])) {

  $_SESSION['panier'][$idvisiteur] =  [];

}
if ($qty == 0) {
  unset($_SESSION['panier'][$idvisiteur][$id] );
}else {
  $_SESSION['panier'][$idvisiteur][$id] = $qty;

}

header("location:".$_SERVER["HTTP_REFERER"]);




?>
