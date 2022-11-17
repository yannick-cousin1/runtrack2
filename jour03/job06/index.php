<?php

function length($string)            // This function return the length of a string
{
      $i = 0;
      while (isset($string[$i]))
      {
            $i++;
      }
      return $i;
}

$str = "Les choses que l'on possede finissent par nous posseder.";
$i = -1;

$strLen = length($str);

while ($i+$strLen >= 0) // We parse the string from the end till the index is 0
{
      echo $str[$i+$strLen];
      $i--;
}

?>
