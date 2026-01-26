<!--slip35.php-->
<?php
$host = "localhost";
$port = "5432";
$dbname = "gayatri";
$user = "postgres";
$password = "";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if ($conn) {
    echo " Connection to PostgreSQL database successful!";
} else {
    echo " Failed to connect to PostgreSQL database.";
}
?>
