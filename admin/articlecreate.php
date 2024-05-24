<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kitasehat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_article = $_POST['nama_article'];
    $rilis_article = $_POST['rilis_article'];
    $conn->query("INSERT INTO article (nama_article, rilis_article) VALUES ('$nama_article', '$rilis_article')");
    header('Location: articleindex.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Article</title>
    <link rel="stylesheet" type="text/css" href="articlestyle.css">
</head>
<body>
    <h1>Create Article</h1>
    <form method="POST">
        <label for="nama_article">Article Name:</label>
        <input type="text" id="nama_article" name="nama_article" required>
        <label for="rilis_article">Release Date:</label>
        <input type="date" id="rilis_article" name="rilis_article" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>
