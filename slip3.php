<!--slip3.php-->
<html>
<body>
	<form method="POST" action="#">
		Enter String 1<input type="text" name="str1"><br><br>
		Enter String 2<input type="text" name="str2"><br><br>
		
			<input type="radio" name="r" value="a">small string at start of large<br><br>
			<input type="radio" name="r" value="b">position of small<br><br>
			<input type="radio" name="r" value="c">compare both strings<br><br>

		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$ch=$_POST["r"];
	$str1=$_POST["str1"];
	$str2=$_POST["str2"];
	switch($ch){
		case 'a':$pos=strpos($str1,$str2);
				if($pos!==0){
					echo "Not at start";
				}else{
					echo "At start";
				}
		break;
		case 'b':echo strpos($str1,$str2);
		break;
		case 'c':echo strcasecmp($str1,$str2);
		break;
	}
	
	/*<!DOCTYPE html>
<html>
<body>
	<form method="POST" action="">
		Enter Hotel no: <input type="number" name="num"><br><br>
		Enter Hotel name: <input type="text" name="name"><br><br>
		Enter Hotel address: <input type="text" name="addr"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST["num"];
	$name = $_POST["name"];
	$addr = $_POST["addr"];
*/
?>
