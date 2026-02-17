<!--slip2.php-->
<html>
<body>
	<form method="POST" action="#">
		Enter String<input type="text" name="str"><br><br>
		
			<input type="radio" name="r" value="a">Length of  String<br><br>
			<input type="radio" name="r" value="b">Total vowels<br><br>
			<input type="radio" name="r" value="c">LowerCase and TitleCase<br><br>
			<input type="radio" name="r" value="d">Pad with *<br><br>
			<input type="radio" name="r" value="e">Remove whitespaces<br><br>
			<input type="radio" name="r" value="f">Reverse of string<br><br>
			<input type="radio" name="r" value="g">select five word<br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$ch=$_POST["r"];
	$str=$_POST["str"];
	switch($ch){
		case 'a':lengthOFStr($str);
		break;
		case 'b':CountVowels($str);
		break;
		case 'c':LowerAndTitle($str);
		break;
		case 'd':PadWithStar($str);
		break;
		case 'e':RemoveSpace($str);
		break;
		case 'f':RevStr($str);
		break;
		case 'g':selectFive($str);
		break;
		
	}
	function lengthOFStr($str){
		$len=0;
		while($str[$len]!=null){
			$len++;
		}
		echo "Length of String=".$len;
	}
	function CountVowels($str){
		$str=strtolower($str);
		$countv=0;
		for($i=0;$i<strlen($str);$i++){
			if(in_array($str[$i],["a","e","i","o","u"])){
				$countv++;
			}
		}
		echo "No of vowels",$countv;
	}
	function LowerAndTitle($str){
		echo "Lowercase".strtolower($str);
		echo "<br>";
		echo "Title Case".ucwords($str);
	}
	function PadWithStar($str){
		echo str_pad($str,10,"*",STR_PAD_BOTH);
	}
	function RemoveSpace($str){
		echo trim($str);
	}
	function RevStr($str){
		echo strrev($str);
	}
	function selectFive($str){
		$strar=explode(' ', $str);
		$up=array_slice($strar,0,5);
		print_r($up);
		
	}
?>
