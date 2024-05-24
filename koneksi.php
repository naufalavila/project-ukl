<?php
// nama host, username mysql, password mysql
$databaseHost = "localhost";
$databaseName = "kitasehat";
$databaseUsername = "root";
$databasePassword = "";

$conn = mysqli_connect($databaseHost,  $databaseUsername, $databasePassword,$databaseName);

if ($conn){
    //print "berhasil.<br/>";
} else {
    print "tidak berhasil.<br/>";
}

mysqli_select_db($conn, $databaseName)
?>