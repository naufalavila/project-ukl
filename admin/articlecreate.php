<?php
include ("../koneksi.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_article = $_POST['nama_article'];
    $rilis_article = $_POST['rilis_article'];
    $user_ID = $_SESSION['user_ID']; // Ambil user_ID dari session

    $conn->query("INSERT INTO article (nama_article, rilis_article, user_ID) VALUES ('$nama_article', '$rilis_article', '$user_ID')");
    header('Location: articleindex.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
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
            width: 100%;
            max-width: 400px;
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
    <form method="POST">
        <div class="container">
            <label for="nama_article">Article Name:</label>
            <input type="text" id="nama_article" name="nama_article" required>
        </div>
        
        <div class="container">
            <label for="rilis_article">Release Date:</label>
            <input type="date" id="rilis_article" name="rilis_article" required>
        </div>
        
        <button class="button" type="submit">Create</button>
        <a href="articleindex.php">Back</a>
    </form>
</body>
</html>
