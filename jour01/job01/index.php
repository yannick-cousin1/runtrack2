<?php
// strings
$str = "LaPlateforme";
echo nl2br($str . "\n");
$str2 = "Vive";
$str3 = "!";
echo $str2 . " " . $str . " " . $str3;
echo nl2br("\n");

// int
$val = 6;
echo nl2br($val . "\n");
$val += 4;
echo nl2br($val . "\n");

// Boolean
$myBool = True;
echo nl2br($myBool . "\n");
$myBool = False;
echo $myBool;

// Or, to print if the Boolean is True or False :
for ($i=0;$i<2;$i++) {

	if ($myBool) {
		echo nl2br("\$myBoolean vaut True\n");
} 	else if (!$myBool) {
		echo nl2br("\$myBoolean vaut False\n");
}
	$myBool = True;
}
?>
