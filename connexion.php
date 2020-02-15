<?php
// Create connection
$host = "localhost";
$username = "root";
$password = "";
$database = "tp_wi";

$connection = mysqli_connect($host, $username, $password, $database)or die (mysql_error().' sur la ligne '.__LINE__); 


?>
