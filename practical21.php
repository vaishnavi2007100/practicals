<?php
// Initialize an empty array
$array = array();

// Fill the array with values using a for loop
for ($i = 0; $i < 10; $i++) {
    $array[$i] = $i * 10; // Assign a value (e.g., i * 10) to each index
}

// Print the array elements
for ($i = 0; $i < 10; $i++) {
    echo "Element at index $i is: " . $array[$i] . "<br>";
}
?>
