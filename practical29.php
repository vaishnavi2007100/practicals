<?php
// Create an indexed array with duplicate values
$numbers = array(10, 20, 30, 20, 40, 10, 50, 30);

// Display original array
echo "Original Array: <br>";
foreach($numbers as $num){
    echo $num . " ";
}

echo "<br><br>";

// Remove duplicate values using array_unique()
$uniqueNumbers = array_unique($numbers);

// Display array after removing duplicates
echo "Array after removing duplicates (using array_unique): <br>";
foreach($uniqueNumbers as $num){
    echo $num . " ";
}
?>
