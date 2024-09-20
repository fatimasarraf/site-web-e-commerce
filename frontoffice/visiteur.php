<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>visiteur</title>
  </head>
  <body>
    <?php
    session_start();
    if (!isset($_SESSION['visiteurs'])) {
      header('Location:connexion.php');
    }

     ?>
     <h3> Bonjour <?php echo $_SESSION['visiteurs']['nom'] ?></h3>
  </body>
</html>
