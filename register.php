<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman register</title>
</head>
<body>
    <div class="container">
        <h1>Register Form</h1>
        <form action="register.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="username" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>
                        <select name="level" id="level" required>
                            <option disabled selected>Pilih</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button class="btn" name="submit" >Register</button>
                        <button><a href="index.php">Login here!</a></button>
                    </td>
                </tr>
            </table>            
        </form>
    </div>
</body>
</html>

<?php 
    // Check if form submittted, insert form data into user's table
    if (isset($_POST['submit'])) {
        $namas = $_POST['nama'];
        $usernames = $_POST['username'];
        $passowrds = $_POST['password'];
        $levels = $_POST['level'];

        //echo ($judul) :
        // include database connection file
        include_once("koneksi.php");

        // insert user data into table
        $result = mysqli_query($mysqli, 
        "INSERT INTO user(nama, username, password, level) VALUES ('$namas', '$usernames', ' $passowrds', '$levels')");
    
        // show message when user added
        //echo "Data added succesfully. <a href = 'index.php'>View Data Buku</a>";
        header("location:index.php");
    }

?>