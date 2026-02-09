<!--slip14.php-->
<?php

$filename = "file1.txt"; // Name of your flat file

echo "<h2>Itemized Bill</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<thead>";
echo "<tr>";
echo "<th>Item Code</th>";
echo "<th>Item Name</th>";
echo "<th>Units Sold</th>";
echo "<th>Rate</th>";
echo "<th>Total</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$grandTotal = 0;

if (file_exists($filename)) {
    $file = fopen($filename, 'r');

    if ($file) {
        while (($line = fgets($file)) !== false) {
            // Trim whitespace and split the line by comma
            $itemDetails = explode(',', trim($line));

            // Ensure we have all four expected details
            if (count($itemDetails) === 4) {
                $itemCode = htmlspecialchars($itemDetails[0]);
                $itemName = htmlspecialchars($itemDetails[1]);
                $unitsSold = (int)$itemDetails[2];
                $rate = (float)$itemDetails[3];
                $itemTotal = $unitsSold * $rate;
                $grandTotal += $itemTotal;

                echo "<tr>";
                echo "<td>" . $itemCode . "</td>";
                echo "<td>" . $itemName . "</td>";
                echo "<td>" . $unitsSold . "</td>";
                echo "<td>$" . number_format($rate, 2) . "</td>";
                echo "<td>$" . number_format($itemTotal, 2) . "</td>";
                echo "</tr>";
            }
        }
        fclose($file);
    } else {
        echo "<tr><td colspan='5'>Error opening file: " . $filename . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='5'>File not found: " . $filename . "</td></tr>";
}

echo "</tbody>";
echo "<tfoot>";
echo "<tr>";
echo "<th colspan='4' style='text-align:right;'>Grand Total:</th>";
echo "<th>$" . number_format($grandTotal, 2) . "</th>";
echo "</tr>";
echo "</tfoot>";
echo "</table>";

?>
