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
		

$str = "I'm sorry Dave I'm afraid I can't do that";
$j = 0;

while(isset($str[$j]))
{
	if (isVowel($str[$j]))
	{
		echo $str[$j];
	}
	$j++;
}

?>
