<?php
$new_array = array(26, 56, 78, 59, 12, 5, 24);
// Sort the array in ascending order
sort($new_array);
echo "Sorted Array(Ascending Order): " .implode(", ", $new_array). "<br>";

// Find the maximum and minimum values of the array
$max_value = max($new_array);
$min_value = min($new_array);
echo "Minimum Value: " .$min_value. "<br>";
echo "Maximum Value: " .$max_value. "<br>";

// Insert a new item in an array in any position
$inserted_item = 100;
$insert_position = 3;
array_splice($new_array, $insert_position, 0, $inserted_item);
echo "Array after inserting 100 at position 3: " .implode(", ", $new_array). "<br>";
?>
