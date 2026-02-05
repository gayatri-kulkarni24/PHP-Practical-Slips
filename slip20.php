<!--slip20.php-->
<html>
<body>
	<form method="POST" action="#">
			Enter any of choice--<br><br>
			<input type="radio" name="r" value="1">Reverse the order of each element’s key-value pair<br><br>
			<input type="radio" name="r" value="2">Traverse the elements in random order<br><br>
			<input type="radio" name="r" value="3">Convert the array elements into individual variables<br><br>
			<input type="radio" name="r" value="4">Display the elements of an array along with key<br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$arr = array(
   	 "name" => "Alice",
    	"age" => 25,
   	 "city" => "New York"
	);
	print_r($arr);
	echo "<br><br><br>";
	$ch=$_POST["r"];
	echo "your result---<br><br>";
	switch($ch){
		case 1:print_r(array_flip($arr));
		break;
		case 2:shuffle($arr);
			print_r($arr);
		break;
		case 3:extract($arr);
			echo "name=$name age=$age  city=$city";
		break;
		case 4:print_r(array_keys($arr));
		break;
		
	}
	
?>
