<?php
    include("../koneksi.php");

    if( !isset($_GET['user_ID'])){
        header('location: index.php');
    }
    $id = $_GET['user_ID'];

    $result = mysqli_query($mysqli, "SELECT * FROM user WHERE user_ID=$id");

    while($user_data = mysqli_fetch_array($result))
    {
        $nama = $user_data ['nama'];
        $username = $user_data ['username'];
        $password = $user_data ['password'];
        $level = $user_data ['level'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit.php</title>
</head>
<body>
    <form action="edit_tahap2.php" method="post">
        <div>
            <label>Nama</label><br>
            <input type="text" name="nama" value="<?php echo $nama;?>">
        </div>
    </form>
    <form action="edit_tahap2.php" method="post">
        <div>
            <label>Username</label><br>
            <input type="text" name="username" value="<?php echo $username;?>">
        </div>
    </form>
    <form action="edit_tahap2.php" method="post">
        <div>
            <label>Password</label><br>
            <input type="text" name="password" value="<?php echo $password;?>">
        </div>
    </form>
    <form action="edit_tahap2.php" method="post">
        <div>
            <label>Level</label><br>
            <input type="text" name="level" value="<?php echo $level;?>">
        </div>
    </form>
</body>
</html>