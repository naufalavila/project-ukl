<?php
// Mengaktifkan session pada PHP
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    // Cek jika user login sebagai admin
    if($data['level'] == "admin"){
        // Buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['user_ID'] = $data['user_ID']; // Simpan user_ID ke session

        // Alihkan ke halaman dashboard admin
        header("location:admin/index.php");

    } else if($data['level'] == "user"){
        // Buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        $_SESSION['user_ID'] = $data['user_ID']; // Simpan user_ID ke session

        // Alihkan ke halaman dashboard user
        header("location:user/about.php");

    } else {
        // Alihkan ke halaman login
        header("location:index.php");
    }
} else {
    header("location:index.php?pesan=gagal");
}
?>
