<?php error_reporting(E_ALL ^ E_NOTICE);?>
<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    .a2{text-decoration: none;
    color: white;
  padding: 20px;
font-size: 20px}
    .navbar{background-color: black;
    text-align: center;
  padding-bottom: 10px}
  .a2:hover{color: #f50d79;}



  </style>
  <body>
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
  </body>
</html>
