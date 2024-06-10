<?php
    include ("../koneksi.php");

    if(isset($_POST['useraksi'])){
        if($_POST['useraksi'] == "edit"){

            echo "Edit data <a href= 'index.php'>Kembali</a>";
            //var_dump($_POST);
           
            $user_id = $_POST['user_id'];
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = $_POST['level'];

            $update = "UPDATE user SET nama='$nama', username='$username', password='$password', level='$level' WHERE user_ID='$user_id';";
            $sql = mysqli_query($conn, $update);

        } else if($_POST['useraksi'] == "tambah"){

            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = $_POST['level'];

            $query = "insert into user values(null, '$nama', '$username', '$password', '$level')";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                echo "data sudah masuk <a href= 'index.php'>Kembali</a>";
            } else {
                echo $query;
            }

            //echo $user_id." | ".$nama." | ".$username." | ".$password." | ".$level." | ". "<br>";
            //echo "Tambah data <a href= 'index.php'>Kembali</a>";
        }
    }
    
    if(isset($_GET['delete'])) {

        $userid = $_GET['delete'];
        $delete = mysqli_query($conn, "DELETE FROM user WHERE user_ID = '$userid'");

        if ($delete) {
            echo "data berhasil dihapus <a href= 'index.php'>Kembali</a>";
        } else {
            echo "gagal dihapus";
        }

       //echo "Delete data <a href= 'index.php'>Kembali</a>";
    }

?>
