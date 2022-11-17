<?php

function isVowel ($char)
{
	$table = ['a','e','i','o','u','y','A','E','I','O','U','Y'];
	$c = 0;

	for ($i=0;$i<12;$i++)
	{
		if ($char == $table[$i])
		{
			$c++;
			break;
		}
	}
	if ($c != 0)
	{
		return True;
	}
	else
	{
		return False;
	}
}

function countVowelAndConsonant ($string)
{
	$table = ['a','e','i','o','u','y','A','E','I','O','U','Y'];


      $dico = [
            'consonnes' => 0,
            'voyelles' => 0,
      ];

	$i = 0;

      while (isset($string[$i]))
      {
            if (!isVowel($string[$i]) && $string[$i] != " " && $string[$i] != "'" && $string[$i] != ",")
            {
                  $dico['consonnes']++;
            }
            else if (isVowel($string[$i]))
            {
                  $dico['voyelles']++;
            }
            $i++;
      }
      return $dico;
}

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dico = countVowelAndConsonant($str);

echo "<table border='1'><tr><th>Consonnes</th><th>Voyelles</th></tr>";
echo ("<tr><td>" . $dico['consonnes'] . "</td><td>" . $dico['voyelles'] . "</td></tr></table>");



?>
