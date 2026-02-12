<!--slip9.php-->
<html>
<body>
	<form method="POST" action="#">
			<input type="radio" name="r" value="1">Insert<br><br>
			<input type="radio" name="r" value="2">Delete<br><br>
			<input type="radio" name="r" value="3">Display<br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$a=array(10,20,30,40);
	$ch=$_POST["r"];
	switch($ch){
		case 1:array_push($a,50);
			print_r($a);
		break;
		case 2:array_pop($a);
			print_r($a);
		break;
		case 3:$n=print_r($a);
		break;
	}

?>
