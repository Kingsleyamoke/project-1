<?php
$dBName = "main-project";
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";

$connection = new mysqli($servername, $dBUsername, $dBPassword, $dBName);

if($connection->connect_error){
    die("Connection failed: " .$connection->connect_error);
}
?>