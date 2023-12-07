<?php  
for ($x = 1; $x <= 5; $x++) {
	for ($y = 0; $y<=5; $y++){
    	echo "*";
    }
  echo "<br>";
}

echo "<br>";

for ($x = 1; $x <= 5; $x++) {
	for ($y = 1; $y<=$x; $y++){
		echo "$y";
    }
	echo "<br>";
}

echo "<br>";

for ($x = 1; $x <= 5; $x++) {
	for ($y = 1; $y<=$x; $y++){
		echo "*";
    }
	echo "<br>";
}

echo "<br>";

for ($x = 5; $x <= 1; $x++) {
	for ($y = 1; $y>=$x; $y++){
		echo "$y";
    }
	echo "<br>";
}

echo "<br>";

for ($i = 1; $i <= 5; $i++) {
	for ($j = 1; $j<=5-$i; $j++){
		echo "&nbsp;&nbsp;";
    }
	for ($k = 1; $k<=2 *$i-1; $k++){
		echo "*";
	}
	echo "<br>";
}
?>  
