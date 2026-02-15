<!--slip4.php-->
<html>
<body>
	<form method="POST" action="#">
		Enter String<input type="text" name="str"><br><br>
		Select a Separator<br>
		<select name="sep">
			<option value="#">#</option>
			<option value="%">%</option>
			<option value="@">@</option>
		</select><br><br>
			<input type="radio" name="r" value="1">split the string<br><br>
			<input type="radio" name="r" value="2">replace all occurences of separator<br><br>
			<input type="radio" name="r" value="3">find the last word<br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>`
<?php
	$str=$_POST["str"];
	$sep=$_POST["sep"];
	$ch=$_POST["r"];
	switch($ch){
		case 1:$words=explode($sep,$str);
			print_r($words);
		break;
		case 2:echo str_replace($sep,"*",$str);
		break;
		case 3:echo strrchr($str,$sep);
		break;
	}
?>
