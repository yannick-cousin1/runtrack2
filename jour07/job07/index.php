<html>
<head>
</head>
<body>
<form action="" method="get" class="formulaire">
      <label for="str">Str : </label>
      <input type="text" name="str" id="str">
      <select name="fonction">
      	<option>Gras</option>
      	<option>Cesar</option>
      	<option>Plateforme</option>
      </select>
      <input type="submit" value="Envoyer">
</form>

<?php

function occurences($str, $char)
{
      $i = 0;
      $o = 0;
      while (isset($str[$i]))
      {
            if ($char == $str[$i])
            {
                  $o++;
            }
            $i++;
      }
      return $o;
}

function lengthOf($str)
{
      $i = 0;
      while (isset($str[$i]))
      {
            $i++;
      }
      return $i-1; // One less, cause we want the length to use it as array indexes (since it begin at 0)
}

function cutByWord($str)
{
      $i = 0;
      $j = 0;

      while (isset($str[$i]))
      {
            if ($str[$i] != " ")
            {
                  $array[$j] = $array[$j] . $str[$i];
            }
            else
            {
                  $j++;
            }
            $i++;
      }
      return $array;
}

function gras($str)
{
      $k = 0;
      $array = cutByWord($str);

      while (isset($array[$k]))
      {
            if (occurences('ABCDEFGHIJKLMNOPQRSTUVWXYZ', $array[$k][0] ))
            {
                  $array[$k] = "<b>" . $array[$k] . "</b>";
            }
            $nstring = $nstring . $array[$k] . " ";
            $k++;
      }

      return $nstring;
}

function plateforme($str)
{
      $i = 0;
      $array = cutByWord($str);

      while (isset($array[$i]))
      {
            if ($array[$i][lengthOf($array[$i])] == 'e' && $array[$i][lengthOf($array[$i])-1] == 'm')
            {
                  $array[$i] = $array[$i] . "_";
            }
            $nstring = $nstring . $array[$i] . " ";
            $i++;
      }
      return $nstring;
}




?>
</body>
</html>
