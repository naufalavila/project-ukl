<?php
    include("koneksi.php");

    if (isset($_POST['simpan'])) [
        $id = $_POST['user_ID'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        var_dump($nama);

        include_once("koneksi.php");

        $result = mysqli_query($mysqli, "UPDATE user SET nama='$nama', username= '$username', password= '$password', level= '$level' ");
        header('location: index.php');
    ];
?>