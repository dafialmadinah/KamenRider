<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "Kamen_Rider";

$db = mysqli_connect($hostname, $username, $password, $database_name);
if ($db->connect_error){
    echo "Koneksi Database Error";
    die("error");
}

?>