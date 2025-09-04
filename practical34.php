<?php
// Create associative array of fruits and their prices
$fruits = array(
    "Apple" => 120,
    "Banana" => 40,
    "Orange" => 80,
    "Mango" => 100,
    "Grapes" => 60
);

echo "Original Array:<br>";
print_r($fruits);

// Sorting by values (ascending order)
asort($fruits);
echo "<br><br>Sorted by Values (asort):<br>";
print_r($fruits);

// Sorting by keys (ascending order)
ksort($fruits);
echo "<br><br>Sorted by Keys (ksort):<br>";
print_r($fruits);
?>
