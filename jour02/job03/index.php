<?php

for ($i=0;$i<=100;$i++) 
{
	if ($i > 0 && $i < 20)
	{
		echo ("<i>" . $i . "</i><br/>");
	}
	else if ($i > 25 && $i < 50)
	{
		if ($i == 42)
		{
			echo ("La Plateforme_<br/>");
		}
		else
		{
			echo ("<u>" . $i . "</u><br/>");
		}
	}
	else
	{
		echo nl2br($i . "\n");
	}
}

?>
