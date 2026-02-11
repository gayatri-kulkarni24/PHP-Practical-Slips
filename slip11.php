<!--slip11.php-->
<?php
// Define the associative array
$people = array("Sagar" => "31", "Vicky" => "41", "Leena" => "39", "Ramesh" => "40");

echo "Original Array:\n";
echo "<br>";
print_r($people);
echo "<br><br>";

// 1. Ascending order sort by Value
echo "\n1. Ascending order sort by Value:\n";
echo "<br>";
asort($people); // Sort by value, maintain key association
print_r($people);
echo "<br><br>";

// 2. Ascending order sort by Key
echo "\n2. Ascending order sort by Key:\n";
echo "<br>";
ksort($people); // Sort by key in ascending order
print_r($people);
echo "<br><br>";

// 3. Descending order sort by Value
echo "\n3. Descending order sort by Value:\n";
echo "<br>";
arsort($people); // Reverse sort by value
print_r($people);
echo "<br><br>";
// 4. Descending order sort by Key
echo "\n4. Descending order sort by Key:\n";
echo "<br>";
krsort($people); // Reverse sort by key
print_r($people);
?>
