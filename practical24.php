<?php
// Indexed array with numbers
$numbers = array(10, 20, 30, 40, 50);

// Calculate sum using array_sum() function
$sum = array_sum($numbers);

// Display the numbers
echo "Numbers in array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}

// Display the sum
echo "<br>Total Sum of numbers: " . $sum;
?>
