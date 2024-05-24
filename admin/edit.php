<!DOCTYPE html>

<?php
    include ("../koneksi.php");

    $userid = '';
    $nama = '';
    $username = '';
    $password = '';
    $level = '';


    if(isset($_GET['ubah'])) {
        $userid = $_GET['ubah'];

        $query = "SELECT * FROM user WHERE user_ID = '$userid';";
        $sql = mysqli_query($conn, $query);

        $hasil = mysqli_fetch_assoc($sql);

        $nama = $hasil['nama'];
        $username = $hasil['username'];
        $password = $hasil['password'];
        $level = $hasil['level'];

        
        //var_dump($hasil);
        //die();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user add</title>
    <style>
        form .container label {
            font-size: 18px;
            font-weight: 600px;
        }

        form .container input {
            margin-bottom: 15px;
            padding-left: 5px;
        }

        .button, form a {
            background-color: #9341e0;
            color: white;
            font-weight: 600;
            margin-right: 7px;
            border: none;
            border-radius: 15px;
            padding: 5px 10px;
            
        }
    </style>
</head>
<body>
    <form action="proses.php" method="POST">
        <input type="hidden" value = "<?php echo $userid; ?>" name="user_id">
        
        <div class="container">
            <label>Nama :</label><br>
            <input type="text" name="nama" value = "<?php echo $nama; ?>" placeholder="your short name">
        </div>
        
        <div class="container">
            <label>Username :</label><br>
            <input type="text" name="username" value = "<?php echo $username; ?>" placeholder="username">
        </div>
          
        <div class="container">
            <label>Password :</label><br>
            <input type="text" name="password" value = "<?php echo $password; ?>" placeholder="password">
        </div>

        <div class="container">
            <label>Level :</label><br>
            <input type="text" name="level" value = "<?php echo $level; ?>" placeholder="admin or user">
        </div>
            
        <?php
        if(isset($_GET['ubah'])) {
        ?>
            <button class="button" type="submit" name="useraksi" value="edit">Edit</button>
        <?php
            } else {
        ?>
            <button class="button" type="submit" name="useraksi" value="tambah">Tambah</button>
        <?php
            }
        ?>
        
        <a href="index.php" type="button">Back</a>
    </form>
</body>
</html>