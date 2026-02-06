<!--slip17.php-->
<?php
// result.php
require 'function.php';


    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    $result = calculate($num1, $num2, $op);

    echo "<h2>Result: $result</h2>";
    echo '<a href="form.php">Back</a>';
?>
