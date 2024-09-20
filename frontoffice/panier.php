
<?php error_reporting(E_ALL ^ E_NOTICE);?>

<?php
session_start();
require_once'database.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">



<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
 integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <title>panier</title>
  </head>
  <body>
    <style media="screen">
      .valider{color: white;
      background-color: #f67280;
    font-size: 20px;
  width: 200px}
        .vider{color: white;
        background-color: #6c567b;
        width: 200px;
      font-size:20px; }
      table{
      text-align: center;
    display: inline-block;}
      .counter{
      padding-top: 10px;
    padding-bottom: 5px}
      button{background-color: teal;
      color: white;
    font-size: 18px}
    .titre{
    background-color: pink
  }
  .contenu{font-size: 18px}
  .logo{text-align: center;}
  .forml{display: inline-block;
  margin-left: 400px}
  #qty{width: 30px}
  .vide{background-color: red;
  text-align: center;
  padding: 10px;
  color: white;
  font-style: italic;
margin: 0 300px 0 300px}
  .commande{background-color:red;
  text-align: center;
  color: white;
  font-style: italic;
margin: 0 300px 0 300px;
}

nav{
background-color: black;
padding: 10px;
display: inline-block;}
a{color: white;

    text-decoration: none;
    font-weight: 600;
}
    </style>
    <nav >
      <a href="index2.php"> ← HOME</a>

    </nav>

    <h1 class="logo"><span class="ros">O</span><span class="oum">UMWARD</span></h1>
    <?php
    $idvisiteur = $_SESSION['visiteurs']['id'];
     ?>
    <h1>Mon panier (<?php if (isset($_SESSION['panier'][$idvisiteur])) {
    echo count($_SESSION['panier'][$idvisiteur]); } ?>)</h1>

    <?php
    $idvisiteur = $_SESSION['visiteurs']['id'];
    if (isset($_POST['vider'])) {
  $_SESSION['panier'][$idvisiteur]=[] ;
  header('location:panier.php');
}
  $idvisiteur = $_SESSION['visiteurs']['id'];
  $panier = $_SESSION['panier'][$idvisiteur];
  if (!empty($panier)) {
    $idproduit =  array_keys($panier);
    $idproduit = implode(',',$idproduit);
    $produits = $bdd->query( "SELECT * FROM produits WHERE id IN($idproduit) ") -> fetchALL(PDO::FETCH_ASSOC);
}

  if (isset($_POST['valider'])) {
    $idvisiteur = $_SESSION['visiteurs']['id'];
    if ($idvisiteur) {



    $sql ='INSERT INTO ligne_commande(id_produit,idcommande,prix,quantite,total	)VALUES  ';
    $total  = 0;
    $prixProduit = [];

   foreach ($produits as $produit){
     $idproduit = $produit['id'];
$qty = $panier[$idproduit];
$prix = $produit['prix'];
$total += $qty * $prix;
$prixProduit[$idproduit] =[
  'id' => $idproduit,
  'prix' => $prix,
  'total' => $qty *$prix,
  'qty' => $qty
];
}
$date=date('y-m-d');
$sss=$bdd->prepare('INSERT INTO commande VALUES(NULL,?,?,?)');
$sss->execute([$idvisiteur,$total,$date]);


$idCommande = $bdd->lastInsertId();
$args=[];

foreach ($prixProduit as $produit) {
  $id = $produit['id'];
$sql .= "(:id$id,'$idCommande',:prix$id,:qty$id,:total$id),";
//$args[$produit['id'],$idCommande,$produit['prix'],$produit['qty'] ,$produit['total']  ]
}
$sql = substr($sql,0,-1);
$sqlState = $bdd->prepare($sql);
foreach ($prixProduit as $produit) {
  $id=$produit['id'];
$sqlState -> bindParam(':id'.$id , $produit['id']);
$sqlState -> bindParam(':prix'.$id , $produit['prix']);
$sqlState ->bindParam(':qty'.$id , $produit['qty']);
$sqlState ->bindParam(':total'.$id , $produit['total']);

}

$inserted=$sqlState->execute();

if ($inserted) {
  ?>
  <div class="commande">
    <h2>Votre commande est bien ajoutee</h2>
  </div>
<?php
}

}else {
  header('Location:connexion.php');

}
}

     ?>

     <?php
     if (!empty($panier)) { ?>

  <table border="1px solid">
    <tr>
      <th class="titre">le produit</th>
    <th class="titre">Nom </th>
    <th class="titre">Quantite</th>
    <th class="titre">Prix</th>
    <th class="titre">Total</th>
    </tr>


    <?php $total = 0; ?>

    <?php foreach ($produits as $produit): ?>

<?php
$idproduit= $produit['id'];
 $totalproduit  = $produit['prix']*$panier[$idproduit];
$total+=$totalproduit ;
?>
      <tr>
        <td><img  src="../backoffice/upload<?php echo $produit['image']?> " width="70px"height="70px"></td>
        <td class="contenu"><?php echo $produit['nom']?></td>
        <td>  <?php

          $idvisiteur = $_SESSION['visiteurs']['id'];
          $qty = $_SESSION['panier'][$idvisiteur][$idproduit]??0;
          $boutton = $qty == 0 ?'ajouter' :'modifier';
         ?>
         <form class="counter " action="ajouterpanier.php" method="post">
           <button  class="btn btn-primary mx-2 counter-moins"type="button" name="button">-</button>
           <input type="hidden" name="id" value="<?php echo $idproduit ?>">
           <input  value="<?php echo $qty ; ?>" type="number" name="qty" value="" id="qty"  >
           <button  class="btn btn-primary mx-2 counter-plus"type="button" name="button">+</button><br><br>
         <input class="btn btn-success" type="submit" name="ajouter" value="<?php echo $boutton  ?>">
         <?php if ($qty != 0) {?>
           <input formaction="supprimerpanier.php" class="btn btn-danger" type="submit" name="supprimer" value=" supprimer">
         <?php } ?>
         </form>
         <script src="index.js"></script>

  </td>

        <td class="contenu"><?php echo $produit['prix']?>DH</td>
        <td class="contenu"> <?php echo $totalproduit ?> DH </td>
      </tr >
    <?php endforeach; ?>

 <tfoot>
  <tr>
    <th class="titre"colspan="4">total</th>
    <th><?php echo $total ?>DH </th>
  </tr>


 </tfoot>
</table>

<form class="forml"  method="post">
  <input class=" valider" type="submit" name="valider" value="valider la commande" ><br><br>
  <input onclick="return confirm('Voulez vous vraiment vider le panier');" class="vider" type="submit" name="vider" value="vider le panier">
 </form>

<?php }

 else {?>
   <h2 class="vide">votre panier est vide!</h2>
 <?php } ?>


  </body>
</html>
