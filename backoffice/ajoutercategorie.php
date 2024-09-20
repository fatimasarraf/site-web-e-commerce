<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ajouter categorie</title>


      <style media="screen" type="text/css">
      pody{padding: 0px;
      margin: 0px}
.email{color: gray;
width: 400px}
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
      </style>
      </head>
      <body>
        <?php include"nav.php" ?>
        <?php if (isset($_POST['ajouterc'])) {

        //upload image
        $filename='';
        if (isset($_FILES['imagec'])) {
        $imagec=$_FILES['imagec']['name'];
        $filename=uniqid().$imagec;
        move_uploaded_file($_FILES['imagec']['tmp_name'],'upload'.$filename);
        }
  $nomc=$_POST['nomc'];
        if (!empty($imagec)&& !empty($nomc)) {
        require_once'database.php';
        $sss=$bdd->prepare('INSERT INTO categories(image,nom) VALUES(?,?)');
        $sss->execute([$filename,$nomc]);
      //  header('Location:categories.php');

        }else {
          echo "les deux champs sont obligatoirs";
        }}

        ?>
        <form class="" action="" method="post"enctype="multipart/form-data">

        <div class="form1">

      <label for=""> l'image de categorie:</label><br><br>
    <input class="email" type="file" name="imagec" value="choisir un image"  placeholder="choisir un image "><br><br>
    <label for=""> Nom de categorie:</label><br><br>

<input class="name" type="text" name="nomc" value=""  placeholder="Nom de categorie"><br><br>

    <input class="submit" type="submit" name="ajouterc" value="ajouter categorie" ><br><br>
    <br>
    </div>
     </form>
  </body>
</html>
