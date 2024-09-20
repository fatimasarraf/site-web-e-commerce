<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>listes des produits</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <link rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body>
    <?php include"nav.php"; ?>
    <div class="container py-2">
      <table border="1px solid" class="table table striped table-hover">
        <tr>
          <th>id</th>
            <th>nom</th>
            <th>prix</th>
            <th>image</th>
            <th>description</th>
            <th>categorie</th>
            <th>operation</th>

        </tr>
        <?php  require_once "database.php";
        $produits= $bdd ->query("SELECT  produits.*, categories.nom  as 'categorie' FROM produits INNER JOIN categories on produits.idcat=categories.id")->fetchALL(PDO::FETCH_ASSOC);
foreach ($produits as $produit) {
  ?>


        <tr>
          <td><?php echo $produit['id'] ?></td>
          <td><?php echo $produit['nom'] ?></td>
          <td><?php echo $produit['prix'] ?></td>
          <td><?php echo $produit['image'] ?></td>
          <td><?php echo $produit['description'] ?></td>
          <td><?php echo $produit['categorie'] ?></td>

<td>
  <a href="modifierproduit.php?id=<?php echo $produit['id']?>" class="btn btn-primary btn-sm" >modifier</a>
  <a href="supprimerproduit.php?id=<?php echo $produit['id']?>" onclick="return confirm('Voulez vous vraiment supprimer la categorie <?php echo  $produit['nom'] ?>');"  class="btn btn-danger btn-sm"> supprimer</a>


</td>
        </tr>
        <?php
        }?>
      </table>

    </div>
  </body>
</html>
