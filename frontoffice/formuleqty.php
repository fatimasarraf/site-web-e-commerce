<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>fg</title>
  </head>
  <body>
    <form class="" action="ajouterPanier.php" method="post">
      <input type="hidden" name="id" value="<?php echo $idproduit ?>">
      <button  class="btn btn-primary mx-1 counter-moins"type="button" name="button">-</button>
      <input value="0" type="number" name="qty" value="" id="qty"  >
      <button  class="btn btn-primary mx-1 counter-plus"type="button" name="button">+</button><br><br>

    <input class="btn btn-success" type="submit" name="ajouter" value="ajouter au panier">
    </form>
  </body>
</html>
