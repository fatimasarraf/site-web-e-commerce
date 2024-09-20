<?php
if (isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
if (!empty($email)&& !empty($password)) {
require_once'database.php';
$sss=$bdd->prepare('SELECT * FROM admin WHERE email =? AND password=?');
$sss->execute([$email,$password]);
if ($sss->rowCount()>=1) {
  session_start();
  $_SESSION['admin']= $sss->fetch();
  header('Location:admin.php');
  }
  else {

  echo "email ou password incorrect";
}
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
    <title>connexion</title>
  </head>
  <style media="screen" type="text/css">
  .ver{color: red;
  text-align: center;
  font-size: 30px;
  margin-top: 30px
}
  pody{padding: 0px;
  margin: 0px}
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
  <body>
    <?php include"nav.php" ?>
    <form class="forml" action="" method="post">
    <div class="form1">
<input class="email" type="email" name="email" value="" placeholder= "Entrer votre e-mail"><br><br>
<input  class="password"type="password" name="password" value="" placeholder="entrer votre mot de passe"><br><br><br>
<input class="submit" type="submit" name="submit" value="SE CONNECTER" ><br><br>
<br>

</div>
 </form>

  </body>
</html>
