<?php
// make connection with database
include("db/connection.php");

// initialize variables
$businessName = $_POST['businessName'];
$businessEmail = $_POST['email'];
$pass = $_POST['passcode'];
$phone = $_POST['phoneNo'];
$businessAddress = $_POST['businessAddress'];

$sql_insert = "insert into login_tbl(email_id,passcode,status)VALUES('$businessEmail', '$pass', 1)";

$result = mysqli_query($connection, $sql_insert);

$lastId = mysqli_insert_id($connection);

$sql_insert_b = "insert into businessinfo_tbl(businessName,phoneNo,businessAddress,	login_tbl_id)VALUES('$businessName', '$phone', '$businessAddress', '$lastId')";

$result_b = mysqli_query($connection, $sql_insert_b);
if(!$result_b){
    echo "Note Inserted";
}else{
    echo"sucess";
}


?>