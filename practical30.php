<?php
// Create an associative array of countries and capitals
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

// Print countries and capitals using foreach
echo "List of Countries and their Capitals:<br><br>";
foreach($countries as $country => $capital){
    echo "The capital of $country is $capital.<br>";
}
?>
