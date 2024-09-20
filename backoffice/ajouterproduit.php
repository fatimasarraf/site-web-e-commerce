<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ajouter produit</title>


      <style media="screen" type="text/css">
      pody{padding: 0px;
      margin: 0px}
      label{color: white;
      font-size: 20px}

      .submit{background-color: #f50d79;
      font-size: 15px;
      color: white;
      text-align: center;
      font-size: 18px;
      }
      .form1{border: 3px solid gray;
      padding: 20px;
      width: 400px;
      background-color: black;
      margin: 0px auto;
      text-align: center;
      margin-top: 50px
      }
      input{width: 300px;
      height: 40px;
      padding-left: 10px
      }
      

    a{text-decoration: none;
    color: blue;font-size: 16px}
    }
    .email{color: gray;
    width: 400px}
      </style>
      </head>
      <body>
        <?php include"nav.php" ?>
        <?php if (isset($_POST['ajouterp'])) {

          $nomp=$_POST['nomp'];
          $prix=$_POST['prix'];

           $filename='';
           if (isset($_FILES['imagep'])) {
           $imagep=$_FILES['imagep']['name'];
           $filename=uniqid().$imagep;
           move_uploaded_file($_FILES['imagep']['tmp_name'],'upload'.$filename);
           }

            $description=$_POST['description'];
            $categorie=$_POST['categorie'];
        if (!empty($nomp)&& !empty($prix) && !empty($imagep) && !empty($description) && !empty($categorie)) {
        require_once'database.php';
        $sss=$bdd->prepare('INSERT INTO produits(nom,prix,image,description,idcat) VALUES(?,?,?,?,?)');
        $sss->execute([$nomp,$prix,$filename,$description,$categorie]);
//header('location:produits.php');
}
        else {
          echo "les champs sont obligatoirs";
        }}

        ?>

        <form class="" action="" method="post" enctype="multipart/form-data">

        <div class="form1">
        <label for="">Nom de produit</label>
        <input class="name" type="text" name="nomp" value=""  ><br><br>
        <label for="">Prix</label><br>
        <input class="name" type="number" name="prix" value=""  ><br><br>
        <label for="">l'image</label><br>
        <input class="email" type="file" name="imagep" value=""  ><br><br>
        <label for="">Description</label><br>
        <input  class="password"type="textarea" name="description" value="" ><br><br>
<?php
require"database.php";
$categories= $bdd ->query('SELECT * FROM categories')->fetchALL(PDO::FETCH_ASSOC);
      ?>  <label for="">categories</label><br>
        <select class="" name="categorie">
          <option value="">choisissez une categorie</option>

          <?php
          foreach ($categories as $categorie) {
            echo " <option value=' ".$categorie['id']." '>".$categorie['nom']."</option>";

          }
           ?>
        </select>
        <br><br>
        <input class="submit" type="submit" name="ajouterp" value="ajouter produit" ><br><br>

        </div>
        </form>


  </body>
</html>
