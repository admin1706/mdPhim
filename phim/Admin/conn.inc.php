<?php
$servername = "localhost";
$database = "phim";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db($conn, $database);
?>
