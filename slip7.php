<!--slip7.php-->
<html>
<body>
<form action="#" method="post">
	Enter the details<br>
	Enter Email id:<input type="text" name="s"><br>
	<input type="submit" name="s1" value="proceed">
</form>
</body>
</html>
<?php
	$email=$_POST["s"];
	if(preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/",$email)){
		echo "valid email id";
	}else{
		echo "Invalid email";
	}
?>
