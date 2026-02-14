<!--slip5.php-->
<html>
<body>
	<form method="POST" action="#">
		Enter Student name<input type="text" name="t1"><br><br>
		Enter College name<input type="text" name="t2"><br><br>
		Enter Greet Message<input type="text" name="t3"><br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>`
<?php
	$t1=$_POST["t1"];
	$t2=$_POST["t2"];
	$t3=$_POST["t3"];
	if($t1==null or $t2==null or $t3==null){
		echo "Hum to Jay Jay Hai";
	}else{
		echo $t3. "  by  " . $t1. "  from  ". $t2;
	}
?>
