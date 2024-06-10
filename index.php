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
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6fcf97, #5bb839);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            text-align: center;
        }

        .container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #ffffff;
        }

        .form {
            display: flex;
            flex-direction: column;
        }

        .form input {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ffffff;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }

        .form input::placeholder {
            color: #ffffff;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: rgba(40, 167, 69, 0.8); /* Semi-transparent green */
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: rgba(33, 136, 56, 0.8); /* Darker semi-transparent green on hover */
        }

        .forgot button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: rgba(0, 123, 255, 0.8); /* Semi-transparent blue */
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .forgot button:hover {
            background-color: rgba(0, 105, 217, 0.8); /* Darker semi-transparent blue on hover */
        }

        .forgot a {
            color: #ffffff;
            text-decoration: none;
        }

        .forgot a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="login">Login Your Account</h1>
        
        <form class="form" action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="button">Login</button>
            <a href="user/noabout.php" class="button">Continue Anyway</a>
        </form>

        <div class="forgot">
            <button><a href="register.php">Register</a></button>
        </div>
    </div>
</body>
</html>
