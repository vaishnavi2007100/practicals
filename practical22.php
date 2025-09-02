<?php
// Create an indexed array of size 10
$numbers = array();

// Fill the array with values from 1 to 10
for ($i = 0; $i < 10; $i++) {
    $numbers[] = $i + 1;
}

// Print the array using foreach loop
foreach ($numbers as $index => $value) {
    echo "Index: $index, Value: $value<br>";
}
?>
