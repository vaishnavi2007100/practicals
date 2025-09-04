<?php
// Create associative array of students and their marks
$students = array(
    "Amit" => 85,
    "Riya" => 92,
    "Sohan" => 78,
    "Neha" => 88,
    "Vikas" => 80
);

// Key to check
$key = "Vikas";

// Check if key exists
if (array_key_exists($key, $students)) {
    echo "Key '$key' exists in the array with value: " . $students[$key];
} else {
    echo "Key '$key' does not exist in the array.";
}
?>
