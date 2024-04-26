<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Halaman Login</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: white;
}

body {
    background-color: darkseagreen;
}

button {
    background-color: darkolivegreen;
    outline: none;
    border: none;
}

button, a {
    text-decoration: none;
}

.container form input {
    color: black;
}
    </style>
</head>
<body>
    <div class="container">
        <h1 class="login">Login Your Account</h1><br>
        
        <form class="form" action="login.php" method="post">
            <input type="text" name="user" placeholder="username" required>
            <input type="password" name="pass" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>

        <div class="forgot">
            <button><a href="register.php">Register</a></button>
        </div>
    </div>
</body>
</html>