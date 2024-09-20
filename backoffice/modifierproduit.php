<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>modifier produit</title>


      <style media="screen" type="text/css">
      pody{padding: 0px;
      margin: 0px}
    .submit{background-color: blue;
    font-size: 15px;
    color: white;
    text-align: center;
    font-size: 18px}
    .form1{border: 3px solid gray;
    padding: 10px;
    width: 400px;
    background-color: beige}
    input{width: 300px;
    height: 30px;
    }
    a{text-decoration: none;
    color: blue;font-size: 16px}
    }
      </style>
      </head>
      <body>
        <?php include"nav.php" ?>
        <?php
        require_once"database.php";
        $sss=$bdd->prepare('SELECT * FROM produits WHERE id=?');
        $id=$_GET['id'];
        $sss->execute([$id]);
        $produit=$sss->fetch(PDO::FETCH_ASSOC);
      if (isset($_POST['ajouterp'])) {
          $nomp=$_POST['nomp'];
          $prix=$_POST['prix'];
            $imagep=$_POST['imagep'];
            $description=$_POST['description'];
            $categorie=$_POST['categorie'];
        if (!empty($nomp)&& !empty($prix) && !empty($imagep) && !empty($description) && !empty($categorie)) {
        $sss=$bdd->prepare('UPDATE produits SET nom=?,prix=?,image=?,description=?,idcat=?WHERE id=?');
        $sss->execute([$nomp,$prix,$imagep,$description,$categorie,$id]);
header('location:produits.php');
}
        else {
          echo "les champs sont obligatoirs";
        }}

        ?>

        <form class="" action="" method="post">

        <div class="form1">
          <input hidden class="name" type="text" name="id" value="<?php echo $produit['id'] ?>"  ><br><br>
        <label for="">Nom de produit</label>
        <input class="name" type="text" name="nomp" value="<?php echo $produit['nom'] ?>"  ><br><br>
        <label for="">Prix</label><br>
        <input class="name" type="number" name="prix" value="<?php echo $produit['prix'] ?>"  ><br><br>
        <label for="">titre de l'imaage</label><br>
        <input class="email" type="text" name="imagep" value="<?php echo $produit['image'] ?>"  ><br><br>
        <label for="">Description</label><br>
        <input  class="password"type="textarea" name="description" value="<?php echo $produit['description'] ?>" ><br><br>
<?php
require"database.php";
$categories= $bdd ->query('SELECT * FROM categories')->fetchALL(PDO::FETCH_ASSOC);
      ?>
       <label for="">categories</label><br>
        <select class="" name="categorie">
          <option value="">choisissez une categorie</option>

          <?php
          foreach ($categories as $categorie) {
            if ($produits->idcat==$categorie['id']) {
              echo " <option selected value=' ".$categorie['id']." '>".$categorie['nom']."</option>";

            }
else {
  echo " <option value=' ".$categorie['id']." '>".$categorie['nom']."</option>";

}
          }
           ?>
        </select>
        <br><br>
        <input class="submit" type="submit" name="ajouterp" value="modifier produit" ><br><br>

        </div>
        </form>


  </body>
</html>
