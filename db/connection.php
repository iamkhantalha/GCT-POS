<?php
$serverName = "localhost";
$user = "root";
$dbpass = "";
$dbName = "pointofsale_db";

$connection = mysqli_connect($serverName, $user, $dbpass,$dbName);
if (!$connection) {
    // echo "Error";
}else{
    // echo "Connected";
} 

?>