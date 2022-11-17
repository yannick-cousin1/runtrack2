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

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$i = 0;
$first = $str[0]; // Keep the first char to put it at the end later.

$strLen = length($str)-2; // Get the length of the string, then deduct 2 (cause we'll use $i+1 as index in the loop)

while ($i <= $strLen) // Parse the string, replacing each current char by the next one ($i + 1)
{
      $str[$i] = $str[$i+1];
      $i++;
}


$str[$strLen+1] = $first; // Replacing the last character by the first one

echo $str;

?>
