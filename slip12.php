<!--slip12.php-->
<html>
<body>
	<form method="POST" action="#">
			Select 1 radio button<br><br>
			<input type="radio" name="r" value="a">split array into chunks<br><br>
			<input type="radio" name="r" value="b">Sort the array by values without changing the keys.<br><br>
			<input type="radio" name="r" value="c">Filter the odd elements from an array.<br><br>
			<input type="radio" name="r" value="d">Merge the given arrays.<br><br>
			<input type="radio" name="r" value="e">Find the intersection of two arrays.<br><br>
			<input type="radio" name="r" value="f">Find the union of two arrays.<br><br>
			<input type="radio" name="r" value="g">Find set difference of two arrays.<br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$ch=$_POST["r"];
	$array1 = [
   		"a" => 1,
    		"b" => 2,
    		"c" => 3,
   		"d" => 4,
    		"e" => 5
	];
	$array2 = [
    		"b" => 2,
   		 "c" => 3,
   		 "f" => 6
	];
	
	switch($ch){
		case 'a':echo "1. Split into chunks:\n";
			$chunks = array_chunk($array1, 3, true);
			print_r($chunks);
		break;
		case 'b':echo "\n2. Sorted by values (preserve keys):\n";
			asort($array1);
			print_r($array1);
		break;
		case 'c':echo "\n3. Filter odd elements:\n";
			$odd = array_filter($array1, function($value) {
   			 return $value % 2 !== 0;
			});
			print_r($odd);
		break;
		case 'd':echo "\n4. Merged arrays:\n";
			$merged = array_merge($array1, $array2);
			print_r($merged);

		break;
		case 'e':echo "\n5. Intersection of arrays (by values):\n";
			$intersection = array_intersect($array1, $array2);
			print_r($intersection);
		break;
		case 'f':echo "\n6. Union of arrays (preserving keys from the first array):\n";
				$union = $array1 + $array2;
			print_r($union);
		break;
		case 'g':echo "\n7. Difference of arrays (values in array1 but not in array2):\n";
			$difference = array_diff($array1, $array2);
			print_r($difference);
		break;
		
	}
?>
