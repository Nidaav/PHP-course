<?php
$aDeviner = 150;
?>
<?php if (isset($_GET['chiffre'])): ?>
  <?php if ($_GET['chiffre'] > $aDeviner): ?>   //On va directement chercher dans l'url de la page ce que l'utilisateur a rentré dans le formulaire
    Votre chiffre est trop grand
  <?php elseif ($_GET['chiffre'] < $aDeviner): ?>
    Votre chiffre est trop petit
  <?php else: ?>
    Bravo ! Vous avez deviné le chiffre <?= $aDeviner ?>
  <?php endif ?>
<?php endif ?>

<form action="/jeu.php" method="GET">
  <input type="number" name="chiffre" placeholder="Entre 0 et 1000" value="<?php if (isset($_GET['chiffre'])) { echo htmlentities($_GET['chiffre']); } ?>">
  <button type="submit">Devinez</button>
</form>
