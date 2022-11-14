<?php
//Booleans
$Bool1 = False;
$Bool2 = True;

//Integers
$int1 = 2;
$int2 = 4;
$int3 = 6;

//Strings
$str1 = "Hello";
$str2 = "Hello again";

//Floats
$float1 = 4.2;
$float2 = 6.7;

//One array to rule them all ( we will use integers indexes to parse it )
$tableau = [
	0 => $Bool1,
	1 => $Bool2,
	2 => $int1,
	3 => $int2,
	4 => $int3,
	5 => $str1,
	6 => $str2,
	7 => $float1,
	8 => $float2,
];

// Print the opening
echo "<table border='1'><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";

// Go for the loop, we parse the array and checking each variable for his type
for ($i=0;$i<9;$i++) 
{
	
	if (is_bool($tableau[$i])) { // if it's a boolean
		echo "<tr><td>Boolean</td><td>Var" . $i . "</td><td>" . $tableau[$i] . "</td></tr>";
	}
	else if (is_int($tableau[$i])) { // if it's an integer
		echo "<tr><td>Int</td><td>Var" . $i . "</td><td>" . $tableau[$i] . "</td></tr>";
	}
	else if (is_string($tableau[$i])) { // if it's a string
		echo "<tr><td>String</td><td>Var" . $i . "</td><td>" . $tableau[$i] . "</td></tr>";
	}
	else if (is_float($tableau[$i])) { // if it's a float
		echo "<tr><td>Float</td><td>Var" . $i . "</td><td>" . $tableau[$i] . "</td></tr>";
	}
}

// print the ending
echo "</table>"; 
?>
