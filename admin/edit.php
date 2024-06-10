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
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Add</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container {
            margin-bottom: 15px;
        }
        .container label {
            font-size: 18px;
            font-weight: 600;
            display: block;
            margin-bottom: 5px;
        }
        .container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button, form a {
            background-color: #28a745;
            color: white;
            font-weight: 600;
            margin-right: 7px;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .button:hover, form a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <form action="proses.php" method="POST">
        <input type="hidden" value="<?php echo $userid; ?>" name="user_id">
        
        <div class="container">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $nama; ?>" placeholder="Your short name">
        </div>
        
        <div class="container">
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
        </div>
          
        <div class="container">
            <label>Password:</label>
            <input type="text" name="password" value="<?php echo $password; ?>" placeholder="Password">
        </div>

        <div class="container">
            <label>Level:</label>
            <input type="text" name="level" value="<?php echo $level; ?>" placeholder="Admin or User">
        </div>
            
        <?php if(isset($_GET['ubah'])) { ?>
            <button class="button" type="submit" name="useraksi" value="edit">Edit</button>
        <?php } else { ?>
            <button class="button" type="submit" name="useraksi" value="tambah">Tambah</button>
        <?php } ?>
        
        <a href="index.php">Back</a>
    </form>
</body>
</html>
