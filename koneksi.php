<?php
// nama host, username mysql, password mysql
$databaseHost = "localhost";
$databaseName = "kitasehat";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost,  $databaseUsername, $databasePassword,$databaseName);

if ($mysqli){
    print "koneksi database berhasil.<br/>";
} else {
    print "koneksi database tidak berhasil.<br/>";
}
?>