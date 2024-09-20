<?php
session_start();
$connect =false;
 if (isset($_SESSION['admin'])) {
   $connect =true;
 } ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>nav</title>
    <style media="screen">

    *{
        padding: 0;
        margin: 0;
    }
    .navbar{
      width: 100%;
      z-index: 1;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 15px;

    }
    a{
        text-decoration: none;
        font-weight: 600;
    }
    ul{
        display: flex;
        margin-right: 16px;


    }
    .ros{
        color: #f50d79;
    }
    li{
        padding: 20px;
        list-style: none;
        margin-right: 29px;

    }
    .logo{
        color: white;
        font-family: 'Zen Dots', cursive;
        margin-left: 35px;

    }
    .labo{
        margin-top: -6px;
        font-family: 'IBM Plex Mono', monospace;
        font-size: 22px;
        margin-left: 6px;
        letter-spacing: 8.48px;
    }

    body{
       width: 100%;
       height: 100vh;
       background-image: linear-gradient(rgba(3, 49, 7, 0.1),rgba(20, 1, 15, 0.75)),url(images/background.jpg);
       background-size: cover;

    }
    .a1{
       color: white;
       text-decoration: none;
       font-size: 112%;

    }
    .a1:hover{
        color: #f33870;
        border-bottom: 2px solid #f70073;
        transition: 1.1s;
    }





    .loginsi{
        font-size: 15px;
        font-weight: bold;
        border-radius: 4px;
        padding: 4px;
        color: white;
        background-color:transparent;
        border: none;
        cursor: pointer;
        padding-right: 12px;
        margin-left: 19px;
    }
    .png{
        width: 40px;

    }
    .png:hover{
        transition: 0.6s;
        transform: scale(1.15);
        z-index: 2;
    }


    .bini{
        margin-bottom:120px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .bini .content{

        text-align: center;

    }
    .bini .content h2{
        color: white;
        font-size: 3em;
    }
    .bini p{
        color: white;
        font-size: 1.2em;
        padding: 15px
    }
    .btn1{
        font-size: 1em;
        color: white;
        background: #f50d79;
        padding: 10px 20px;
        display: inline-block;
    }
    .btn2{
        font-size: 1em;
        color: white;
        background: gray;
        padding: 10px 20px;
        display: inline-block;
    }

    section{
        padding: 100px;

    }
    .row{
        width: 100%;
        display: flex;
        justify-content: space-between;


    }
    .row .col{
        max-width: 48%;
        justify-content: center;
        align-items: center;
    }
    .row .col h2{
        margin-bottom: 20px;
    }
    .titre{
        color: black;
        font-size: 2em;
        font-weight: 300;
    }
    .imgg{
        height: 300px;
        width: 450px;
    }
    .apropos{
        background: linear-gradient(#fde1f2,white);
    }
    .secproduits{
        background: linear-gradient(white,#fde1f2);
        height: 1100px;




    }
    .imgg2{
        position: relative;
        top: 0%;
        left: 0%;
        height: 200px;
        width: 300px;
        margin-right: 20px;
        object-fit: cover;

    }
    .imgg2:hover{
        transition: 0.6s;
            transform: scale(1.15);
            z-index: 2;
    }
    .rendreflex{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 100px;
        margin-bottom: 70px;
    }
    .P1{
        display: flex;
        justify-content: center;
        font-weight: bolder;
        margin-top: 10px;
        font-size: 120%;
    }
    .flex{
        width: 300px;
        height: 200px;
        margin-top: 20px;
        border: 35px solid white;
        box-shadow: 20px 15px 35px rgba(0,0,0,0.8)
    }
    .titre2{
        color: black;
        font-size: 1.5em;
        font-weight: 300;
    }
    .btn3{
        font-size: 1em;
        color: white;
        background: #f50d79;
        padding: 10px 20px;
        display: inline-block;
    }
    .btn3:hover{
        letter-spacing: 1px;
        transition: 0.6s;
    }
    .btn3centre{
        display: flex;
        justify-content: center;
    }

    .titr-h2{
        font-size: 200%;
        margin-bottom: 20px
    }

    .flex:hover{
        transform: scale(1.1);
        z-index: 2;
        transition: 0.6s;
    }
    .remise{
        display: flex;
        justify-content: center;
        font-size: 60px;
        line-height: 160px;
        color: transparent;
        -webkit-text-stroke: 2px white ;
        background-image: url(images/back.jpg);
        -webkit-background-clip: text;
        background-position: 0 0;
        animation: back 20s linear infinite;
    }
    .all{
        font-size: 100px;

    }
    @keyframes back{
        100%{
            background-position: 2000px 0;
        }
    }
    .oum{
        font-family: Georgia, 'Times New Roman', Times, serif
    }
    .catego{
        width: 150px;
        height: 150;
        margin-right: 35px;
        border-radius: 50px;
        margin-top: 25px;
    }
    .categos{
        font-size: 200%;
        margin-bottom: 70px;
        margin-top: 70px;
    }

    .dev{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

    }
    .pcatego{

        padding: 10px;
        cursor: pointer;
        margin-left: 30px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif

    }
    .pcategoy{

        padding: 10px;
        cursor: pointer;
        margin-left: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif

    }
    .divcatego:hover{

        transition: 0.6s;
        transform: scale(1.15);
        z-index: 2;

    }
    .categ{
        font-size: 200%;
        margin-bottom: 70px
    }
    .ppropos{
        font-size: 120%;
    }
    .footer{
        height: 300px;

        background-color: black;
        display: flex;
        text-align: center;
        margin: auto;
        justify-content: center;
        padding-top: 0px;


        }
        .foot{
            display: inline-block;
            padding:0 50px 50px 50px;
            padding-top: 50px;
        }

        .footer a{
            color: white;
            text-decoration: none;

        }
        .foot2{
            color: white;
            padding-top: 10px;
        }
        .foot h3{color: pink;
        font-size: 20px}
        .footer li{margin-bottom: 10px}
        .yotub{color: red}
        hr{color: white;
        }
        .copyright{color: white;
          justify-content: center;
          margin-top: 100px;
          margin-right: 100px;
          margin-left: 20px
        }
        .i{
            width: 40px
        }
        .i:hover{
            transition: 0.6s;
            transform: scale(1.15);
            z-index: 2;
        }
        .capt{
            width: 700px;
            height: 500px;
        }
        .cap{
          background-color: white;
          margin: 0%;
          padding: 0px;
          padding-top: 10px ;
          padding-left: 100px;
          padding-bottom: 100px
        }

    </style>
  </head>
  <body>
    <a  style="color:black" href="../frontoffice/index2.php"> ← </a>

    <nav class="navbar"

              <h1 class="logo">  <span class="ros">O</span><span class="oum">UMWARD</span>
          <ul>
              <li><a href="ajouteradmin.php" class="a1">ajouter admin</a></li>
<?php if ($connect) {
  ?>  <li><a href="ajouterproduit.php" class="a1">ajouter Produits</a></li>
    <li><a href="ajoutercategorie.php" class="a1">ajouter categorie </a></li>
    <li><a href="categories.php" class="a1">categories </a></li>
    <li><a href="produits.php" class="a1">produits </a></li>
    <li><a href="deconnexion.php" class="a1">deconnexion </a></li>

<?php
}
 else {?>
  <li><a href="connexion.php" class="a1">Connexion</a></li>
<?php }  ?>

          </ul>

    </nav>

  </body>
</html>
