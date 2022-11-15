<?php

// ANOTHER WAY TO DO IT

/* Instead of testing each divisors, we test divisors between 2 and n-1. If there is one divisor or more, $i isn't a prime number ! */

$c = 0;


for ($i=2;$i<=1000;$i++)
{
	for ($j=2;$j<=$i-1;$j++)
	{
		if ($i % $j == 0 || $i == 2)
		{
			$c += 1;
			break;		/* To avoid looping for too long, we break if we find one divisor
					 (we don't need more to know that it's not a prime number, one more than "1" and "$i" is enough */
		}
	}
	if ($c == 0)
	{
		echo $i . "<br/>";
	}
	$c = 0;
}

?>
