<!--slip21.php-->
<?php
// Open the file
$filename = "student.dat";

if (!file_exists($filename)) {
    die("File not found!");
}

$file = fopen($filename, "r");

echo "<table border='1'>";
echo "<tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>OS</th>
        <th>WT</th>
        <th>DS</th>
        <th>Python</th>
        <th>Java</th>
        <th>CN</th>
        <th>Percentage</th>
      </tr>";

while (($line = fgets($file)) !== false) {
    $data = explode(",", $line);
    
    if (count($data) == 8) {
        list($rollno, $name, $os, $wt, $ds, $python, $java, $cn) = $data;

        // calculate percentage
        $total = $os + $wt + $ds + $python + $java + $cn;
        $percentage = $total / 6;
       $per=round($percentage,2);

        echo "<tr>
                <td>$rollno</td>
                <td>$name</td>
                <td>$os</td>
                <td>$wt</td>
                <td>$ds</td>
                <td>$python</td>
                <td>$java</td>
                <td>$cn</td>
                <td>$per %</td>
              </tr>";
    }
}

echo "</table>";
fclose($file);
?>
