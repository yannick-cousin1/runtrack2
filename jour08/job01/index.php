<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="POST" class="formulaire">
      <input name="button" type="submit" value="Reset">
</form>

<?php

if(isset($_SESSION['nbvisites']) && !isset($_POST['button']))
{
      $_SESSION['nbvisites']++;
      echo $_SESSION['nbvisites'];
}
else if (!isset($_SESSION['nbvisites']) || isset($_POST['button']))
{
      $_SESSION['nbvisites'] = 1;
      echo $_SESSION['nbvisites'];
}
 ?>
</body>
</html>
