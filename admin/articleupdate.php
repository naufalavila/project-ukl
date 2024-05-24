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

if (isset($_GET['edit'])) {
    $article_ID = $_GET['edit'];
    $result = $conn->query("SELECT * FROM article WHERE article_ID=$article_ID");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $article_ID = $_POST['article_ID'];
    $nama_article = $_POST['nama_article'];
    $rilis_article = $_POST['rilis_article'];
    $conn->query("UPDATE article SET nama_article='$nama_article', rilis_article='$rilis_article' WHERE article_ID=$article_ID");
    header('Location: articleindex.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Article</title>
    <link rel="stylesheet" type="text/css" href="articlestyle.css">
</head>
<body>
    <h1>Update Article</h1>
    <form method="POST">
        <input type="hidden" name="article_ID" value="<?php echo $row['article_ID']; ?>">
        <label for="nama_article">Article Name:</label>
        <input type="text" id="nama_article" name="nama_article" value="<?php echo $row['nama_article']; ?>" required>
        <label for="rilis_article">Release Date:</label>
        <input type="date" id="rilis_article" name="rilis_article" value="<?php echo $row['rilis_article']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
