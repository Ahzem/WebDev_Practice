<?php
function checkNum($number){
		if ($number % 2 != 0){
		echo "The Given Number " .$number. " is Odd";
	} else {
		echo "The Given Number " .$number. " is Even";
	}
}

//Define the odd number
$num = 8;

//Define the even number
echo checkNum($num);

?>