<?php session_start();

if (isset($_POST['reset']))
{
      session_destroy();
      header('Location: .');
}


?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="POST" class="formulaire">
      <input name="prenom" type="text">
      <input name="send" type="submit" value="Envoyer">
      <input name="reset" type="submit" value="Reset">
</form>
<?php
if (isset($_POST['prenom']))
{
      $_SESSION['prenom'] =  $_SESSION['prenom'] . "<br><li>" . $_POST['prenom'] . "</li>";
      echo "<ul>";
      echo $_SESSION['prenom'];
      echo "</ul>";
}
?>
</body>
</html>
