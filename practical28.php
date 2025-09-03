<?php
// Create an array
$fruits = array("Apple", "Banana", "Mango", "Orange", "Grapes");

// Value to check
$search = "Orange";

// Check using in_array()
if(in_array($search, $fruits)){
    echo "$search exists in the array.";
} else {
    echo "$search does not exist in the array.";
}
?>
