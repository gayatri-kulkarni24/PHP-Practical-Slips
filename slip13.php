<!--slip13.php-->
<?php
	$file=fopen("file1.txt","r");
	while(!feof($file)){
		$lines=fgets($file);
		echo $lines;
		echo "<br>";
	}
	$f="file1.txt";
	echo "file size=".filesize($f);
?>
