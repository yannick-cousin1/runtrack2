<?php

function countChar($string)
{
	$i = 0;
	while (isset($string[$i]))
	{
		$i++;
	}
	return $i;
}

$str = "Dans l'espace, personne ne vous entend crier";

$nbChar = countChar($str);

echo ("La chaîne 'str' contient " . $nbChar . " caractères");

?>
