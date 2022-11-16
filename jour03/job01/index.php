<?php

$table = [200,204,173,98,171,404,459];
$i = 0;
while(isset($table[$i]))
{
	if ($table[$i] % 2 == 0)
	{
		echo $table[$i] . " est paire<br/>";
	}
	else 
	{
		echo $table[$i] . " est impaire<br/>";
	}
	$i++;
}

?>
