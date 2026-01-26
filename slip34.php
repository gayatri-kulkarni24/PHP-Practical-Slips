<!--slip34.php-->
<?php
	$a1=array(10,20,30,40);
	$a2=array(50,60);
	$arr=array_splice($a1,0,2,$a2);
	print_r($arr);
	echo "<br>";
	print_r($a1);
?>
