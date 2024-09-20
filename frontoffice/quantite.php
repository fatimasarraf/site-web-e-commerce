<div >
  <?php
  $idvisiteur = $_SESSION['visiteurs']['id'];
  $qty = $_SESSION['panier'][$idvisiteur][$idproduit]??0;
  $boutton = $qty == 0 ?'ajouter' :'modifier';
 ?>
 <form class="counter d-flex" action="ajouterpanier.php" method="post">
   <button  class="btn btn-primary mx-2 counter-moins"type="button" name="button">-</button>
   <input type="hidden" name="id" value="<?php echo $idproduit ?>">
   <input value="<?php echo $qty ; ?>" type="number" name="qty" value="" id="qty"  >
   <button  class="btn btn-primary mx-2 counter-plus"type="button" name="button">+</button><br><br>

 <input class="btn btn-success" type="submit" name="ajouter" value="<?php echo $boutton  ?>">
 <?php if ($qty != 0) {?>
   <input formaction="supprimerpanier.php" class="btn btn-danger" type="submit" name="supprimer" value=" supprimer">

 <?php } ?>

 </form>
 <script src="index.js"></script>

</div>
