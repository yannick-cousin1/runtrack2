<?php

for ($i=0;$i<1338;$i++) 
{
	if ($i == 42) 
	{
		echo nl2br("<b><u>" . $i . "</u></b>\n");
	}
	else
	{
		echo nl2br($i . "\n");
	}
}

?>
