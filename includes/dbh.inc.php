<?php

function OpenCon()
{

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connect failed: %s\n". $conn -> error);
 
return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}
function alert($msg) {
    echo "<script>alert('$msg');</script>";
}

?>