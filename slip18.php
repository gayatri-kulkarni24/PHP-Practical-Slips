<!--slip18.php-->
<html>
<body>
	<form method="POST" action="#">
		Enter file 1<input type="text" name="f1"><br><br>
		Enter file 2<input type="text" name="f2"><br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$f1=$_POST["f1"];
	$f2=$_POST["f2"];
	$fp1=fopen($f1,"r");
	$fp2=fopen($f2,"a");
	$data=fread($fp1,filesize($f1));
	fwrite($fp2,$data);
	fclose($fp1);
	fclose($fp2);
	echo "<h2>Contents of first file is appanded to second file</h2>";	
?>
