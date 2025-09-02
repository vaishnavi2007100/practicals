<?php
// Indexed array with numbers
$numbers = array(25, 78, 12, 56, 89, 34, 7, 99);

// Find largest and smallest using built-in functions
$largest = max($numbers);
$smallest = min($numbers);

// Display the array
echo "Numbers in array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}

// Display results
echo "<br>Largest number: " . $largest;
echo "<br>Smallest number: " . $smallest;
?>
