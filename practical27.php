<?php
// Store numbers in an array
$numbers = array(50, 10, 70, 30, 90, 20);

// Display original array
echo "Original Array: <br>";
foreach($numbers as $num){
    echo $num . " ";
}
echo "<br><br>";

// - Ascending Order using sort() -
sort($numbers); // sorts in ascending order
echo "Array in Ascending Order (using sort): <br>";
foreach($numbers as $num){
    echo $num . " ";
}
echo "<br><br>";
// - Descending Order using rsort() -
rsort($numbers); // sorts in descending order
echo "Array in Descending Order (using rsort): <br>";
foreach($numbers as $num){
    echo $num . " ";
}
?>
