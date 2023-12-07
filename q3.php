<?php
function checkNumber($number){
	if ($number <0){
		echo "The Number " .$number. " is Negative";
	} else if ($number>0){
		echo "The Number " .$number. " is Positive";
	} else if($number == 0){
		echo "The Number " .$number. " Equal to Zero";
	}
}

$x = 5;
$y = -1;
$z = 0;


echo "<h2>Positive</h2><br>";
echo checkNumber($x). "<hr>";

echo "<h2>Negative</h2><br>";
echo checkNumber($y). "<hr>";

echo "<h2>Zero</h2><br>";
echo checkNumber($z). "<hr>";

echo "<h2>User Inputs</h2><br>";
echo checkNumber($input). "<hr>";
?>