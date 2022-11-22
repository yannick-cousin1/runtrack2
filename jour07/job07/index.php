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

function myLower($str)                                // This function transform any Uppercase char to
{                                                     // the same lowercase char
      $i = 0;
      $MajAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $MinAlphabet = 'abcdefghijklmnopqrstuvwxyz';

      while (isset($str[$i]))
      {
            for ($j=0; $j<=26;$j++)
            {
                  if ($str[$i] == $MajAlphabet[$j])
                  {
                        $str[$i] = $MinAlphabet[$j];
                  }
            }
            $i++;
      }
      return $str;
}

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

function cutByWord($str)           // This function cut a string word by word and put each word in an array
{                                   // This way, each index of the array is associated to one word
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
            if (occurences('ABCDEFGHIJKLMNOPQRSTUVWXYZ', $array[$k][0] ))  // If the first letter
            {                                                              // of each word is an Uppercase
                  $array[$k] = "<b>" . $array[$k] . "</b>";                // Surround it with <b> markups
            }
            $nstring = $nstring . $array[$k] . " ";                     // concatenate each word (separated by a whitespace)
            $k++;                                                       // to a string.
      }

      return $nstring;
}

function cesar($str, $decalage = 2)
{
      $i = 0;
      $k = 0;
      $lowStr = myLower($str);
      $Alphabet = 'abcdefghijklmnopqrstuvwxyz';

      while (isset($lowStr[$i]))
      {
            for($j=0;$j<=25;$j++)
            {
                  if ($lowStr[$i] == $Alphabet[$j])   //Compare each char of the string with alphabet array
                  {                                   // When we got the position of a char in the alphabet
                        $k = $j + $decalage;          // we use it by adding "$decalage" to it and saving it in a new int variable
                        while ($k > 25)               // If the new value is greater than 25, we need to
                        {                             // get a smaller value (between 0 and 25, cause the alphabet has only 26 chars)
                              $k -= 26;
                        }
                        $lowStr[$i] = $Alphabet[$k];  // We then change the current char with the new one
                        break;                        // We can quit the 'for' loop as we already find the letter
                  }
            }
            $i++;
      }
      return $lowStr;

}

function plateforme($str)
{
      $i = 0;
      $array = cutByWord($str);

      while (isset($array[$i]))
      {     // Here we look at the last char and the one before it (by using the length of each word)
            if ($array[$i][lengthOf($array[$i])] == 'e' && $array[$i][lengthOf($array[$i])-1] == 'm')
            {     // if the last char is 'e' and the one before is 'm', we add an underscore
                  $array[$i] = $array[$i] . "_";
            }
            $nstring = $nstring . $array[$i] . " "; // We then concatenate each word in a string (separated by a whitespace)
            $i++;
      }
      return $nstring;
}

if (isset($_GET['str']))
{
      switch ($_GET['fonction'])
      {
            case 'Gras':
                  echo gras($_GET['str']);
                  break;
            case 'Cesar':
                  echo cesar($_GET['str']);
                  break;
            case 'Plateforme':
                  echo plateforme($_GET['str']);
                  break;
            default:
                  echo "Erreur";
      }
}


?>
</body>
</html>
