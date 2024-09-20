
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>Categories</title>
</head>
<body>
  <style media="screen">
  .secproduit{
text-align: center;
  }
  .img2{
      position: relative;
      top: 0%;
      left: 0%;
      height: 130px;
      width: 100%;
      margin-right: 20px;
      object-fit: cover;

  }
  .img2:hover{
      transition: 0.6s;
          transform: scale(1.15);
          z-index: 2;
  }
  .rendreflexe{
      display: inline-block;
      flex-wrap: wrap;
      justify-content: center;
  }
  .P2{
      display: flex;
      justify-content: center;
      font-weight: bolder;
      margin-top: 10px;
      font-size: 120%;
  }
  .flexes{
      width: 300px;
      height: 200px;
      margin-top: 20px;
      border: 35px solid white;
      box-shadow: 20px 15px 35px rgba(0,0,0,0.8)
  }
  .titrec{
      color: black;
      font-size: 1.5em;
      font-weight: 300;
  }



  .flexe:hover{
      transform: scale(1.1);
      z-index: 2;
      transition: 0.6s;
  }
  </style>

<section class="secproduit">
    <div class="titrec"><h2><span class="ros">Les</span> categories</h2></div>
    <?php
     require_once'database.php';
    $categories= $bdd ->query('SELECT * FROM categories')->fetchALL(PDO::FETCH_OBJ);
    ?>

  <?php foreach ($categories as $categorie): ?>
    <div class="rendreflexe">
    <div class="flexes"><a href="categorie.php?id=<?= $categorie->id ?>"><img src="../backoffice/upload<?= $categorie->image ?>" alt="" class="img2"></a>
       <p class="P2"><span></span> <?=  $categorie->nom  ?></p></div>

</div>
<?php endforeach; ?>
</section>
</body>
</html>
