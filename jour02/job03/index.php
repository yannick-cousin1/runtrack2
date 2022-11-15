<?php

for ($i=0;$i<=100;$i++) 
{
	if ($i > 0 && $i < 20)
	{
		echo nl2br("<i>" . $i . "</i>\n");
	}
	else if ($i > 25 && $i < 50)
	{
		if ($i == 42)
		{
			echo nl2br("La Plateforme_\n");
		}
		else
		{
			echo nl2br("<u>" . $i . "</u>\n");
		}
	}
	else
	{
		echo nl2br($i . "\n");
	}
}

?>
