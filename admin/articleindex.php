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

if (isset($_GET['delete'])) {
    $article_ID = $_GET['delete'];
    $conn->query("DELETE FROM article WHERE article_ID=$article_ID");
}

$result = $conn->query("SELECT * FROM article");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Article CRUD</title>
    <link rel="stylesheet" type="text/css" href="articlestyle.css">
    <style>
    </style>
</head>
<body>
    <div class="header" style="width: 100%; height: 40px; background-color: darkgreen; color:white; font-weight: 800; display: grid; place-items:center; font-size: 14px; font-family:sans-serif;">VIEW TABEL ARTICLE</div>
    <a class= "page" href="http://localhost/kitasehat/admin/index.php"><button>View Table User</button></a>
    <a class= "page" href="http://localhost/kitasehat/admin/bmicrud.php"><button>View Table BMI</button></a>
    <a class= "page" href="http://localhost/kitasehat/admin/articleindex.php"><button>View Table Article</button></a>
    <a href="articlecreate.php">Create New Article</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Release Date</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['article_ID']; ?></td>
            <td><?php echo $row['nama_article']; ?></td>
            <td><?php echo $row['rilis_article']; ?></td>
            <td>
                <a href="articleupdate.php?edit=<?php echo $row['article_ID']; ?>">Edit</a>
                <a href="articleindex.php?delete=<?php echo $row['article_ID']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
