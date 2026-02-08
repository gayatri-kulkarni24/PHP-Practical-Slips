<!--slip15.php-->
<html>
<body>
	<form method="POST" action="#">
		Enter File name<input type="text" name="t"><br><br>
			<input type="radio" name="r" value="1">file type<br><br>
			<input type="radio" name="r" value="2">last access time<br><br>
			<input type="radio" name="r" value="3">size of file<br><br>
			<input type="radio" name="r" value="4">delete file<br><br>
			<input type="radio" name="r" value="5">Modifed time of file<br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$ch=$_POST["r"];
	$file=$_POST["t"];
	switch($ch){
		case 1:echo "file type=".filetype($file);
		break;
		case 2:echo "last access time=".date("F d Y H:i:s.",fileatime($file));
		break;
		case 3:echo "Size of file=".filesize($file);
		break;
		case 4:if(file_exists($file)){
			unlink($file);
			echo "file deleted";
			}else{
			echo "file does not exists";
			}
		break;
		case 5:echo "last modified time=".date("F d Y H:i:s.",filemtime($file));
	
	}
?>
