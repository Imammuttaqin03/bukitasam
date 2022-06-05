<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_berita";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
?>