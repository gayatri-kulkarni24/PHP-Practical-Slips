<!--slip8.php-->
<?php
// Array of 15 high temperatures (in Celsius)
$highTemps = [22, 24, 21, 25, 23, 26, 27, 22, 28, 24, 26, 29, 30, 25, 27];

// Calculate average high temperature
$sum = array_sum($highTemps);
$count = count($highTemps);
$average = $sum / $count;

// Find the five warmest temperatures
rsort($highTemps); // Sort descending
$warmest = array_slice($highTemps, 0, 5); // Get top 5

// Display the results
echo "<h2>Spring Month Temperature Report</h2>";
echo "Average High Temperature: " . round($average, 2) . "&deg;C<br><br>";
echo "Five Warmest Temperatures: " . implode("&deg;C, ", $warmest) . "&deg;C";
?>
