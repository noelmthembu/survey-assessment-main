<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "surveydb";
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

?>