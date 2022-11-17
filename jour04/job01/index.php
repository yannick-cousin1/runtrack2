<form action="" method="get" class="formulaire">
      <label for="nom">Nom : </label>
      <input type="text" name="nom" id="nom">

      <label for="prenom">Prenom : </label>
      <input type="text" name="prenom" id="prenom">

      <input type="submit" value="Envoyer">
</form>

<?php
$i = 0;
foreach ($_GET as $key => $value) {
      if ($value != "")
      {
            $i++;
      }
}
echo "Le nombre d'argument GET envoyé est : " . $i;

?>
