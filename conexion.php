<?php
$servername = "localhost";
$database = "curso";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}else{ echo "conexión establecida";}
?>
