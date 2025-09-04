
<?php
// Create associative array of students and their marks
$students = array(
    "Vaishnavi" => 95,
    "Riya" => 92,
    "Sohan" => 78,
    "Neha" => 88,
    "Vikas" => 80
);

// Update one student's marks
$students["Riya"] = 95;

// Print the updated array
echo "<h3>Updated Students Marks:</h3>";
foreach ($students as $name => $marks) {
    echo $name . " : " . $marks . "<br>";
}
?>


