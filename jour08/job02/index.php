<?php

if (!isset($_COOKIE) || isset($_POST['button']))
{
      setcookie('nbvisites', '1');
      header('Location: .');
      echo $_COOKIE['nbvisites'];


}
else if (isset($_COOKIE['nbvisites']) && !isset($_POST['button']))
{
      $visits = (int)$_COOKIE['nbvisites'];
      $visits++;
      setcookie('nbvisites', (string)$visits);
      echo $_COOKIE['nbvisites'];
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="POST" class="formulaire">
      <input name="button" type="submit" value="Reset">
</form>


</body>
</html>
