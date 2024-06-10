<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #8de649;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        h1 {
            color: #2e7d32;
        }
        table {
            width: 100%;
            margin: 20px 0;
        }
        td {
            padding: 10px;
        }
        input[type="text"],
        input[type="username"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #2e7d32;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #1b5e20;
        }
        button a {
            color: #2e7d32;
            text-decoration: none;
        }
        button {
            background: none;
            border: none;
            padding: 0;
        }
    </style>
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
                        <button class="btn" name="submit">Register</button>
                        <button><a href="index.php">Login here!</a></button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<?php 
    // Check if form submitted, insert form data into user's table
    if (isset($_POST['submit'])) {
        $namas = $_POST['nama'];
        $usernames = $_POST['username'];
        $passwords = $_POST['password'];
        $levels = $_POST['level'];

        // include database connection file
        include_once("koneksi.php");

        // insert user data into table
        $result = mysqli_query($conn, 
        "INSERT INTO user(nama, username, password, level) VALUES ('$namas', '$usernames', '$passwords', '$levels')");
    
        // redirect to index.php after insertion
        header("Location: index.php");
    }
?>
