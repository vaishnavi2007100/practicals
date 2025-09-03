<?php
// Create an array of 6 elements
$numbers = array(10, 20, 30, 40, 50, 60);

// Display original array
echo "Original Array: <br>";
foreach($numbers as $num){
    echo $num . " ";
}
echo "<br><br>";
// --- Method 2: Using array_reverse() ---
echo "Array in Reverse Order <br>";
$reversed = array_reverse($numbers);
foreach($reversed as $num){
    echo $num . " ";
}
?>
