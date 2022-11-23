<?php
if (!isset($_COOKIE) || isset($_POST['prenom']))
{
      setcookie('prenom' , $_POST['prenom'], time()+3600);
      header('Location: .');
}
if (isset($_COOKIE) && isset($_POST['deco']))
{
      setcookie('prenom');
      header('Location: .');
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if (isset($_COOKIE['prenom']))
{
      echo "Bonjour " . $_COOKIE['prenom'] . "<br>";
      echo ("<form action='' method='POST' class='formulaire'>
      <input name='deco' type='submit' value='Deconnexion'>
      </form>");
}
else
{
      echo ("<form action='' method='POST' class='formulaire'>
      <input name='prenom' type='text'>
      <input name='co' type='submit' value='Connexion'>
      </form>");
}

?>
