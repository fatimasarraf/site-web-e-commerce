<?php include'nav.php'; ?>

<?php
if (isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
if (!empty($email)&& !empty($password)) {
require_once'database.php';
$sss=$bdd->prepare('SELECT * FROM visiteurs WHERE email =? AND password=?');
$sss->execute([$email,$password]);
if ($sss->rowCount()>=1) {
  session_start();
  $_SESSION['visiteurs']= $sss->fetch();
  header('Location:visiteur.php');
  }
  else {?>
<div class="ver">
<?php  echo "Email ou password incorrect ?";?>
</div>
<?php
}
}

else {?>
     <div class="ver">
      <?php echo "Veuillez rentrer vos identifiants !" ?>
     </div>
<?php
}}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="styleindex.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">

    <title>connexion</title>
  </head>
  <style media="screen" type="text/css">
  pody{padding: 0px;
  margin: 0px;
  background-color:transparent;}
  .ver{color: red;
  text-align: center;
  font-size: 30px;
  margin-top: 30px
}

h3{color: white;
font-size: 20px;
font-family: sans-serif;}

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
color: #f50d79;
font-size: 17px;}
.compte{background-color: beige;
color: black;}
span{color: white}


  </style>
  <body>
    <form class="" action="" method="post">


    <div class="form1">
  <h3>  Entrer votre e-mail et mot de passe</h3>
  <br>
<input class="email" type="email" name="email" value="" placeholder= E-mail><br><br>
<input  class="password"type="password" name="password" value="" placeholder="Mot de passe"><br><br><br>
<input class="submit" type="submit" name="submit" value="SE CONNECTER" ><br><br>
 <span>n'a pas encore inscrit ?</span> <a href="SeConnecter.php">Creer un compte</a>

<br>

</div>
 </form>

  </body>
</html>
