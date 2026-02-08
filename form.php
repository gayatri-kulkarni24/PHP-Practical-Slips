
<!-- form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form action="result.php" method="post">
        <label>First Number:</label>
        <input type="number" name="num1" required><br><br>

        <label>Second Number:</label>
        <input type="number" name="num2" required><br><br>

        <label>Operation:</label><br>
        <input type="radio" name="op" value="add" checked> Add<br>
        <input type="radio" name="op" value="sub"> Subtract<br>
        <input type="radio" name="op" value="mul"> Multiply<br>
        <input type="radio" name="op" value="div"> Divide<br><br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>
