<?php
if (isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
if (!empty($email)&& !empty($password)) {
require_once'database.php';
$date=date('y-m-d');
$sss=$bdd->prepare('INSERT INTO admin VALUES(NULL,?,?,?)');
$sss->execute([$email,$password,$date]);
header('Location:connexion.php');
}

else {
  echo "Veuillez rentrer vos identifiants";
}
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>connexion</title>
  </head>
  <style media="screen" type="text/css">
  pody{padding: 0px;
  margin: 0px}
.submit{background-color:  #f50d79;
font-size: 15px;
color: white;
text-align: center;
font-size: 18px}
.form1{border: 3px solid gray;
  padding: 30px;
width: 400px;
background-color: black;
margin: 0px auto;
text-align: center;}
input{width: 300px;
height: 30px;
padding-left: 10px

}
a{text-decoration: none;
color: blue;font-size: 16px}
}
  </style>
  <body>
    <?php include"nav.php" ?>

    <form class="" action="" method="post">
    <div class="form1">
<input class="email" type="email" name="email" value="" placeholder= E-mail><br><br>
<input  class="password"type="password" name="password" value="" placeholder="Mot de passe"><br><br><br>
<input class="submit" type="submit" name="submit" value="Ajouter admin" ><br><br>
<br>

</div>
 </form>

  </body>
</html>
