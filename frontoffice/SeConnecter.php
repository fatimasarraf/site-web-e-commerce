<?php include'nav.php'; ?>
<?php
if (isset($_POST['submit'])){
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $telephone=$_POST['telephone'];
  $password=$_POST['password'];

if (!empty($nom) && !empty($email) && !empty($telephone)&& !empty($password)) {
require_once'database.php';
$date=date('y-m-d');
$sss=$bdd->prepare('INSERT INTO visiteurs VALUES(NULL,?,?,?,?,?)');
$sss->execute([$nom,$email,$telephone,$password,$date]);
header('Location:connexion.php');
}


else {?>
     <div class="ver">
      <?php echo "Veuillez rentrer vos identifiants !" ?>
     </div>
  <?php

}
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen" type="text/css">
    body{padding: 0px;
    margin: 0px;
  background-color:#fcfefe;

}
    .ver{color: red;
    text-align: center;
    font-size: 30px;
    margin-top: 30px
  }
    .input{width: 300px;
    height: 30px;
  }
label{font-size: 16px;
font-style: italic;}
    .form2{margin: auto;
      text-align: center;
    border: 3px solid gray;
  width: 500px;
padding: 10px;
background-color: black;
margin-top: 50px}
    select{margin-bottom:  13px;
    margin-top: 4px;}
    input{margin-bottom:  13px;
    margin-top: 4px;
  padding-left: 10px}
      .submit{color: white;
        background: #f50d79;
        font-size: 30px;

    font-size: 18px}
      #a{text-decoration: none;
      color: #f50d79;
    font-size: 17px;}
    .compte{background-color: beige;
    color: black;}
span{color: white}


  </style>
  <body>
    </div>
    <form class="form2" action="" method="post">
  <div class="compte">
    <h1>Créer mon compte</h1>
  </div>
    <input class="input" type="text" name="nom" value="" placeholder="Votre nom"><br>

    <input class="input" type="email" name="email" value="" placeholder="Votre e-mail"> <br>

    <input class="input" type="telephone" name="telephone" value="" placeholder="votre num de telephone"><br>


    <input class="input" type="password" name="password" value="" placeholder="votre mot de passe"><br><br>


<input class="input submit" type="submit" name="submit" value="CRÉER UN COMPTE"><br><br>
<span>déjà client ?</span> <a id="a" href="connexion.php">Connecter a mon compte</a>
</form>
  </body>
</html>
