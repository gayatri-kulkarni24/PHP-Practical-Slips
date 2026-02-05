<!--slip19.php-->
<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>
</head>
<body>

<h2>Enter Marks for 5 Subjects</h2>
<form method="post">
    <table border="1" cellpadding="5">
        <tr>
            <th>Sr No.</th>
            <th>Subject Name</th>
            <th>Marks (out of 100)</th>
        </tr>

        <?php for ($i = 0; $i < 5; $i++) { ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><input type="text" name="subject[]" ></td>
                <td><input type="number" name="marks[]" ></td>
            </tr>
        <?php } ?>
    </table><br>
    <input type="submit" name="submit" value="Show Result">
</form>

<?php

    $subjects = $_POST['subject'];
    $marks = $_POST['marks'];

    $total = 0;

    echo "<h2>Result:</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Sr No.</th><th>Subject</th><th>Marks</th></tr>";

    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . htmlspecialchars($subjects[$i]) . "</td>";
        echo "<td>" . htmlspecialchars($marks[$i]) . "</td>";
        echo "</tr>";
        $total += $marks[$i];
    }

    $percentage = $total / 5;

    // Grade logic
    if ($percentage >= 90) {
        $grade = "A+";
    } elseif ($percentage >= 80) {
        $grade = "A";
    } elseif ($percentage >= 70) {
        $grade = "B";
    } elseif ($percentage >= 60) {
        $grade = "C";
    } elseif ($percentage >= 50) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    echo "<tr><td colspan='2'><strong>Total</strong></td><td><strong>$total</strong></td></tr>";
    echo "<tr><td colspan='2'><strong>Percentage</strong></td><td><strong>$percentage%</strong></td></tr>";
    echo "<tr><td colspan='2'><strong>Grade</strong></td><td><strong>$grade</strong></td></tr>";
    echo "</table>";

?>

</body>
</html>
