<!--slip22.php-->
<?php


	$host = "host=localhost";
	$port = "port=5432";
	$dbname ="dbname=gayatri";
	$credentials="user=postgres password= ";
	
	// Connect to PostgreSQL
	$db = pg_connect("$host $port $dbname $credentials");

	if (!$db) {
		echo "Connection failed.\n";
	} else {
		echo "Connected<br>";
	}
	$sql=<<<EOF
		insert into hotel(hno,hname,address) values(1,"paul","california");
		insert into hotel(hno,hname,address) values(2,"abc","california1");
	EOF;
	
	$ret=pq_query($db,$sql);
	if(!$ret){
		echo pg_last_error($db);
	}else{
		echo "records inserted";
	}
	pg_close($db);

?>
