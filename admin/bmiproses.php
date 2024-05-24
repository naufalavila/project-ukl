<?php
    include ("../koneksi.php");

    if(isset($_POST['bmiaksi'])){
        if($_POST['bmiaksi'] == "edit"){
            echo "Edit data <a href= 'bmicrud.php'>Kembali</a>";

            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $result = $_POST['result'];

            $update = "UPDATE bmi SET weight='$weight', height='$height', result='$result' WHERE result='$result';";
            $sql = mysqli_query($conn, $update);

        } else if($_POST['bmiaksi'] == "tambah"){

            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $result = $_POST['result'];

            $query = "insert into bmi values(null, '$weight', '$height', '$result', null)";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                echo "data sudah masuk <a href= 'bmicrud.php'>Kembali</a>";
            } else {
                echo $query;
            }
            
            //echo "Tambah data <a href= 'bmicrud.php'>Kembali</a>";
        }
    }

    if(isset($_GET['delete'])) {

        $bmiid = $_GET['delete'];
        $delete = mysqli_query($conn, "DELETE FROM bmi WHERE bmi_ID = '$bmiid'");

        if ($delete) {
            echo "data berhasil dihapus <a href= 'bmicrud.php'>Kembali</a>";
        } else {
            echo "gagal dihapus";
        }

        //echo "Delete data <a href= 'bmicrud.php'>Kembali</a>";
    }
?>