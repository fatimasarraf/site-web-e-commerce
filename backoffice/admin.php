<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin</title>
  </head>
  <body>
    <style media="screen">
      h3{text-align: center;}
    </style>
    <?php
    session_start();
    if (!isset($_SESSION['admin'])) {
      header('Location:connexion.php');
    }

     ?>
     <h3 > Bonjour<?php echo $_SESSION['admin']['email'] ?></h3>
  </body>
</html>
