<?php require("database.php");
$categories=$bdd->query("SELECT * FROM categories ")->fetchALL(PDO::FETCH_OBJ);?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="styleindex2.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
            <h1 class="logo"><span class="ros">O</span><span class="oum">UMWARD</span>
            <div class="labo"><h6>laboratoires</h6></div> </h1>
        <ul>
            <li><a href="" class="a1">Home</a></li>
            <li><a href="" class="a1">ajouter un utilisateur</a></li>
            <li><a href="" class="a1">Produits</a></li>
            <li><a href="" class="a1">A propos de nous </a></li>
            <button class="loginsi"><img src="images/png.jpg" alt="" class="png"></button>

        </ul>
    </div>

    <section class="bini">
            <div class=remise>ALL <span class="all">-YOU</span>-NEED</div>

</section>


<?php include'frontoffice/frontcategorie.php' ?>





<section class="secproduits">
    <div class="titre2"><h2><span class="ros">P</span>lus vendu</h2></div>
    <div class="rendreflex">
        <div class="flex"><a href="" class="zin"><img src="images/img5.jpg" alt="" class="imgg2"></a><p class="P1"><span>1</span>00 DH</p></div>
        <div class="flex"><a href=""><img src="images/img6.jpg" alt="" class="imgg2"></a><p class="P1"><span>1</span>15 DH</p></div>
        <div class="flex"><a href=""><img src="images/img7.jpg" alt="" class="imgg2"></a><p class="P1"> <span>1</span>20 DH</p></div>
        <div class="flex"><a href=""><img src="images/img8.jpg" alt="" class="imgg2"></a><p class="P1"><span>1</span>10 DH</p></div>
        <div class="flex"><a href=""><img src="images/img9.jpg" alt="" class="imgg2"></a><p class="P1"><span>1</span>13 DH</p></div>
        <div class="flex"><a href=""><img src="images/img10.jpg" alt="" class="imgg2"></a><p class="P1"> <span>1</span>05 DH</p></div>

    </div>
    <div class="btn3centre"><a href="" class="btn3">Voir Plus</a></div>

</section>
<div class="footer">
        <div class="foot">
          <h3>Nos Services</h3>
          <div class="foot1">
          <ul >
          <li><a  href="#">Livraison <br> <br> Vente En ligne</a></li>


            </ul>
          </div>
          </div>
        <div class="foot">
        <h3>Reston en contact</h3>
          <div  class="foot2">
        <p>  0687345216</p> <br>
        <p> oumward@gmail.com</p> <br>
        <p>  6 rue de l'invention,Marocde </p>
        </div>
          </div>

        <div class="foot footf">
           <h3>Nos reseaux</h3>
          <div class="foot4">
          <ul >
          <li><a href="#"> <img src="images/fb.jpg" alt="" class="i">   <i class="fa-brands fa-square-facebook"></i>   Facebook </a></li>
            <li><a href="#"><img src="images/insta.jpg" alt="" class="i"><i class="fa-brands fa-square-instagram"></i>   Instagram</a></li>
            <li><a href="#"> <img src="images/twit.jpg" alt="" class="i"><i class="fa-brands fa-linkedin"></i>   Twiter</a></li>
            <li><a href="#"> <img src="images/yout.jpg" alt="" class="i"><i  class="fa-brands fa-youtube"></i>   YouTube</a></li>
        </ul>
        </div>

  </div> <hr>
  <div class="copyright">©oumward.com 2022 tout droits réservés

  </div>
      </div>


</body>
</html>
