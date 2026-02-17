<!--slip1.php-->
<html>
<body>
	<form method="POST" action="#">
		Enter number 1<input type="text" name="num1"><br><br>
		Enter number 2<input type="text" name="num2"><br><br>
		<ol type="1">
			<li>Mod of two numbers</li>
			<li>Power of first raised to second</li>
			<li>Sum of first n numbers</li>
			<li>Factorial of second number</li>
												
		</ol>
		<br><br>
		Enter your choice(in numbers)<input type="text" name="choice"><br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$n1=$_POST["num1"];
	$n2=$_POST["num2"];
	$ch=$_POST["choice"];
	switch($ch){
		case 1:mod($n1,$n2);
		break;
		case 2:Power($n1,$n2);
		break;
		case 3:SumOfN($n1);
		break;
		case 4:factorial($n2);
		break;
	}
	function mod($n1,$n2){
		echo "Mod of numbers=".$n1%$n2;	
	}
	function Power($n1,$n2){
		$p=1;
		while($n2>0){
			$p=$p*$n1;
			$n2=$n2-1;
		}
		echo "Power =".$p;	
	}
	function SumOfN($n1){
		$sum=0;
		while($n1>0){
			$sum+=$n1;
			$n1--;
		}
		echo "Sum of numbers=".$sum;	
	}
	function factorial($n2){
		$fact=1;
		while($n2>0){
			$fact*=$n2;
			$n2--;
		}
		echo "Factorail of numbers=".$fact;	
	}
	
?>
