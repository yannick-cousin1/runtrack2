<?php session_start();

if (isset($_POST['reset']))
{
      $_SESSION['prenom'] = "";
      header('Location: .');
      echo $_SESSION['prenom'];
}

if (isset($_POST['prenom']))
{
      $_SESSION['prenom'] =  $_SESSION['prenom'] . "<br>" . $_POST['prenom'];
      echo $_SESSION['prenom'];
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
</body>
</html>
