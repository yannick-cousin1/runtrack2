<?php

// $c is a counter ( it counts how many divisors a number has )
$c = 0;

//We use a first loop to parse each number from 1 to 1000
for ($i=1;$i<=1000;$i++)
{
	for ($j=1;$j<=$i;$j++)  // Second loop to generate each possible divisor ( from 1 to $i )
	{
		if ($i % $j == 0) //We attemps a division witch each divisor, if the rest is 0, then $j is a valid divisor of $i, so we count it in $c
		{
			$c += 1;
		}
	}

	if ( $c == 2 ) // Once the second loop has finished to run, we look at $c. If it's 2, then there were only 2 divisors for $i, and $i is a prime number
	{
		echo $i . "<br/>";
	}
	$c = 0;
}

?>
