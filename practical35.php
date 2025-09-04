<?php
// Create an associative array of countries and their capitals
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "UK" => "London",
    "France" => "Paris",
    "Japan" => "Tokyo"
);

// Value (capital) to search
$searchCapital = "Paris";

// Use array_search() to find the country
$country = array_search($searchCapital, $countries);

if ($country !== false) {
    echo "The capital city '$searchCapital' belongs to: $country";
} else {
    echo "Capital city '$searchCapital' not found in the array.";
}
?>
