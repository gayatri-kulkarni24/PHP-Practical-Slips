<!--slip6.php-->
<html>
<body>
	<form method="POST" action="#">
		Enter String 1<input type="text" name="str1"><br><br>
		Enter String 2<input type="text" name="str2"><br><br>
		Enter Position<input type="text" name="pos"><br><br>
		Enter No.of characters<input type="text" name="chars"><br><br>
			<input type="radio" name="r" value="1">Delete small part<br><br>
			<input type="radio" name="r" value="2">Insert the small<br><br>
			<input type="radio" name="r" value="3">Replace some character<br><br>
			<input type="radio" name="r" value="4">Replace all character<br><br>

		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$str1=$_POST["str1"];
	$str2=$_POST["str2"];
	$pos=$_POST["pos"];
	$char=$_POST["chars"];
	$ch=$_POST["r"];
	switch($ch){
		case 1; echo substr_replace($str1,$str2,$pos,$char);
		break;
		case 2:echo substr_replace($str1,$str2,$pos,0);
		break;
		case 3:echo substr_replace($str1,$str2,$pos,$char);
		break;
		case 4:echo substr_replace($str1,$str2,$pos);
		break;
	}
?>
