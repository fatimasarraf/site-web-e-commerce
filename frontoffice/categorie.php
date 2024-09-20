
<?php error_reporting(E_ALL ^ E_NOTICE);?>

<?php
session_start();
require_once'database.php';
$id = $_GET['id'];
$sss=$bdd->prepare('SELECT * FROM categories WHERE id=?');
$sss->execute([$id]);
$categorie=$sss->fetch(PDO::FETCH_ASSOC);

?>
<?php $sss=$bdd->prepare('SELECT * FROM produits WHERE idcat=?');
$sss->execute([$id]);
$produits=$sss->fetchALL(PDO::FETCH_OBJ);

 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="produit.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <title>categorie|<?php echo $categorie['nom']?></title>
</head>
<body>
<style media="screen">
body{margin-top:20px;
background:#eee;
}
/* E-commerce */
.product-box {
padding: 0;
border: 1px solid #e7eaec;
}
.product-box:hover,
.product-box.active {
border: 1px solid transparent;
-webkit-box-shadow: 0 3px 7px 0 #a8a8a8;
-moz-box-shadow: 0 3px 7px 0 #a8a8a8;
box-shadow: 0 3px 7px 0 #a8a8a8;
}

.product-imitation {
background-color: #f8f8f9;
color: #bebec3;
font-weight: 600;

}
.cart-product-imitation {
text-align: center;
padding-top: 30px;
height: 80px;
width: 80px;
background-color: #f8f8f9;
}
.product-imitation.xl {
padding: 120px 0;
}
.product-desc {
padding: 20px;
position: relative;
}
.ecommerce .tag-list {
padding: 0;
}
.ecommerce .fa-star {
color: #d1dade;
}
.ecommerce .fa-star.active {
color: #f8ac59;
}
.ecommerce .note-editor {
border: 1px solid #e7eaec;
}
table.shoping-cart-table {
margin-bottom: 0;
}
table.shoping-cart-table tr td {
border: none;
text-align: right;
}
table.shoping-cart-table tr td.desc,
table.shoping-cart-table tr td:first-child {
text-align: left;
}
table.shoping-cart-table tr td:last-child {
width: 80px;
}
.product-name {
font-size: 16px;
font-weight: 600;
color: #676a6c;
display: block;
margin: 2px 0 5px 0;
}
.product-name:hover,
.product-name:focus {
color: #1ab394;
}
.product-price {
font-size: 14px;
font-weight: 600;
color: #ffffff;
background-color: #1ab394;
padding: 6px 12px;
position: absolute;
top: -32px;
right: 0;
}
.product-detail .ibox-content {
padding: 30px 30px 50px 30px;
}
.image-imitation {
background-color: #f8f8f9;
text-align: center;
padding: 200px 0;
}
.product-main-price small {
font-size: 10px;
}
.product-images {
margin: 0 20px;
}

.ibox {
clear: both;
margin-bottom: 25px;
margin-top: 0;
padding: 0;
}
.ibox.collapsed .ibox-content {
display: none;
}
.ibox.collapsed .fa.fa-chevron-up:before {
content: "\f078";
}
.ibox.collapsed .fa.fa-chevron-down:before {
content: "\f077";
}
.ibox:after,
.ibox:before {
display: table;
}
.ibox-title {
-moz-border-bottom-colors: none;
-moz-border-left-colors: none;
-moz-border-right-colors: none;
-moz-border-top-colors: none;
background-color: #ffffff;
border-color: #e7eaec;
border-image: none;
border-style: solid solid none;
border-width: 3px 0 0;
color: inherit;
margin-bottom: 0;
padding: 14px 15px 7px;
min-height: 48px;
}
.ibox-content {
background-color: #ffffff;
color: inherit;
padding: 15px 20px 20px 20px;
border-color: #e7eaec;
border-image: none;
border-style: solid solid none;
border-width: 1px 0;
}
.ibox-footer {
color: inherit;
border-top: 1px solid #e7eaec;
font-size: 90%;
background: #ffffff;
padding: 10px 15px;
}
.ajouter{display: inline;
float:left;
background-color: #f50d79  ;
color: white;}

.supprimer{display: inline;
float:right;
background-color:#f50d79 ;
color: white;
}
.text-muted{font-style: italic;
 }
 .qty{background: black;
   }
   .a2{text-decoration: none;
   color: white;
font-size: 20px;
font-style: italic;}
   .navbar{background-color: black;
     text-align: center;
     padding-left: 80px;
     padding-right: 80px

 }
 .a2:hover{color: #f50d79;}
.oum{color: white}
.ros{color:#f50d79; }
h1{text-align: center;}
</style>



<div class="header-2">
    <nav class="navbar">
        <a class="a2" href="index2.php">HOME</a>

        <a class="a2"href="connexion.php">CONNEXION</a>
        <a class="a2"href="SeConnecter.php">INSCRIPTION</a>

        <a class="a2"href="">PRODUITS</a>
        <a class="a2"href="">CATEGORES</a>
        <?php
        $idvisiteur = $_SESSION['visiteurs']['id'];
         ?>

          <a class="a2"href="panier.php"   class="loginsi" > <img src="panier.jpg" alt="" class="png" height="30px" width="30px" >  (<?php if (isset($_SESSION['panier'][$idvisiteur])) {
          echo count($_SESSION['panier'][$idvisiteur]); } ?>)</a>

    </nav>
</div>
<br>

    <div class="container">
    <div class="row">
      <?php foreach ($produits as $produit): ?>
        <?php $idproduit = $produit->id ?>

        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">
                    <div class="product-imitation">
                      <img class="imgg" src="../backoffice/upload<?= $produit->image ?>" alt="" width="240px" height="200px">
                    </div>
                    <div class="product-desc">
                        <span class="product-price">
                            <?= $produit->prix ?>DH
                        </span>
                        <small class="text-muted"> <?php echo $categorie['nom']?>    </small>
                        <a href="#" class="product-name"> <?= $produit->nom ?></a>

                        <div class="small m-t-xs">
    <?=   $produit->description?>   </div>



                        <hr>
                        <div class="card-footer" style="z-index:10">
                          <div class="counter">
                            <?php
                             $idvisiteur = $_SESSION['visiteurs']['id'];
                             $qty = $_SESSION['panier'][$idvisiteur][$idproduit]??0;
                             $boutton = $qty==0 ?'ajouter' :'modifier';
?>
<form class="" action="ajouterpanier.php" method="post">
  <button  class="btn btn-primary mx-1 counter-moins qty"type="button" name="button">-</button>
  <input type="hidden" name="id" value="<?php echo $idproduit ?>">
  <input value="<?php echo $qty ; ?>" type="number" name="qty" value="" id="qty"  >
  <button  class="btn btn-primary mx-1 counter-plus qty"type="button" name="button">+</button>
  <br><br>

<input class=" ajouter" type="submit" name="ajouter" value="<?php echo $boutton  ?>">
<?php if ($qty != 0) {?>
  <input formaction="supprimerpanier.php  " class=" supprimer" type="submit" name="supprimer" value=" supprimer">

<?php } ?>
</form>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      <?php endforeach; ?>

    </div>
    </div>

<script src="index.js"></script>


</body>
</html>
