<!-- <?php
$aDeviner = 150;
$erreur = null;
$succes = null;
if (isset($_GET['chiffre'])) {
  if ($_GET['chiffre'] > $aDeviner) {
    $erreur = "Votre chiffre est trop grand";
  } elseif ($_GET['chiffre'] < $aDeviner) {
    $erreur = "Votre chiffre est trop petit";
  } else {
    $succes = "Bravo ! Vous avez deviné le chiffre <strong>$aDeviner</strong>";
  }
  $value = (int)$_GET['chiffre'];
}
?>
<?php if ($erreur): ?>
  <div class="alert alert-danger">
    <?= $erreur ?>
  </div>
<?php elseif ($succes): ?>
  <div class="alert alert-success">
    <?= $succes ?>
  </div>
<?php endif ?>

<form action="/jeu.php" method="GET">
  <input type="number" name="chiffre" placeholder="Entre 0 et 1000" value="<?= $value ?>">
  <input type="text" name="demo" value="test">
  <button type="submit">Devinez</button>
</form>
 -->
