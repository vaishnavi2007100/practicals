<?php
// Existing associative array
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);
// Add new key-value pair
$countries["Germany"] = "Berlin";

// Print updated array
echo "Updated List of Countries and Capitals:<br><br>";
foreach($countries as $country => $capital){
    echo "The capital of $country is $capital.<br>";
}
?>
