<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>modifier categorie</title>


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
$sss=$bdd->prepare('SELECT * FROM categories WHERE id=?');
$id=$_GET['id'];
$sss->execute([$id]);

$categorie=$sss->fetch(PDO::FETCH_ASSOC);
 if (isset($_POST['ajouterc'])) {

  $nomc=$_POST['nomc'];
  $imagec=$_POST['imagec'];
if (!empty($nomc)&& !empty($imagec)) {
$sss=$bdd->prepare('UPDATE categories SET nom=?,image=? WHERE id=?');
$sss->execute([$nomc,$imagec,$id]);
header('Location:categories.php');

}else {
  echo "les deux champs sont obligatoirs";
}}

?>


        <form class="" action="" method="post">

        <div class="form1">
      <input class="name" type="hidden" name="id" value="<?php echo $categorie['id'] ?>"  ><br><br>
        <label for="">Nom de categorie</label>
    <input class="name" type="text" name="nomc" value="<?php echo $categorie['nom'] ?>"  ><br><br>
      <label for="">titre de l'image</label>
    <input class="email" type="text" name="imagec" value="<?php echo $categorie['image'] ?>"  ><br><br>
    <input class="submit" type="submit" name="ajouterc" value="modifier categorie" ><br><br>
    <br>
    </div>
     </form>
  </body>
</html>
