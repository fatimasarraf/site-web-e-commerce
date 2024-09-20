<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>listes des commandes</title>

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
      <table class="table table striped table-hover">
        <tr>
          <th>id</th>
            <th>image</th>
            <th>nom</th>
            <th>operation</th>
        </tr>
        <?php  require_once "database.php";
        $categories= $bdd ->query('SELECT * FROM categories')->fetchALL(PDO::FETCH_ASSOC);
foreach ($categories as $categorie) {
  ?>


        <tr>
          <td><?php echo $categorie['id'] ?></td>
          <td><?php echo $categorie['image'] ?></td>
          <td><?php echo $categorie['nom'] ?></td>
<td>
  <a href="modifiercat.php?id=<?php echo $categorie['id']?>" class="btn btn-primary btn-sm" >modifier</a>
  <a href="supprimercat.php?id=<?php echo $categorie['id']?>" onclick="return confirm('Voulez vous vraiment supprimer la categorie <?php echo  $categorie['nom'] ?>');"  class="btn btn-danger btn-sm"> supprimer</a>
</td>
        </tr>
        <?php
        }?>
      </table>

    </div>
  </body>
</html>
