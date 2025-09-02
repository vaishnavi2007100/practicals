<?php
// Original array
$originalArray = array("d" => 40, "a" => 10, "c" => 30, "b" => 20);

echo "<h2>Original Array:</h2>";
print_r($originalArray);
echo "<br><br>";

// sort() - Sort by values (ascending), reindex keys
$array1 = $originalArray;
sort($array1);
echo "<b>sort() - Ascending by value, reindexes keys:</b><br>";
print_r($array1);
echo "<br><br>";

// rsort() - Sort by values (descending), reindex keys
$array2 = $originalArray;
rsort($array2);
echo "<b>rsort() - Descending by value, reindexes keys:</b><br>";
print_r($array2);
echo "<br><br>";

// asort() - Sort by values (ascending), preserves keys
$array3 = $originalArray;
asort($array3);
echo "<b>asort() - Ascending by value, preserves keys:</b><br>";
print_r($array3);
echo "<br><br>";

// arsort() - Sort by values (descending), preserves keys
$array4 = $originalArray;
arsort($array4);
echo "<b>arsort() - Descending by value, preserves keys:</b><br>";
print_r($array4);
echo "<br><br>";

// ksort() - Sort by keys (ascending)
$array5 = $originalArray;
ksort($array5);
echo "<b>ksort() - Ascending by key:</b><br>";
print_r($array5);
echo "<br><br>";

// krsort() - Sort by keys (descending)
$array6 = $originalArray;
krsort($array6);
echo "<b>krsort() - Descending by key:</b><br>";
print_r($array6);
echo "<br><br>";

// usort() - User-defined sort by values
$array7 = $originalArray;
usort($array7, function($a, $b) {
    return $a <=> $b; // Ascending
});
echo "<b>usort() - User-defined sort by value, reindexes keys:</b><br>";
print_r($array7);
echo "<br><br>";

// uasort() - User-defined sort by values, preserves keys
$array8 = $originalArray;
uasort($array8, function($a, $b) {
    return $a <=> $b; // Ascending
});
echo "<b>uasort() - User-defined sort by value, preserves keys:</b><br>";
print_r($array8);
echo "<br><br>";

// uksort() - User-defined sort by keys
$array9 = $originalArray;
uksort($array9, function($a, $b) {
    return strcmp($a, $b); // Ascending
});
echo "<b>uksort() - User-defined sort by key:</b><br>";
print_r($array9);
echo "<br><br>";
?>
