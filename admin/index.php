<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW TABEL USER</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="header" style="width: 100%; height: 40px; background-color: darkgreen; color:white; font-weight: 800; display: grid; place-items:center; font-size: 14px; font-family:sans-serif;">VIEW TABEL DATA</div>

    <table class="table" border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
        </tr>
</body>
</html>

<?php
    //SELECT TABEL USER DARI DATABASE
    include "../koneksi.php";
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM user") or die(mysqli_error());

    while($data = mysqli_fetch_array($query_mysql)){
?>

<tr>
    <td><?php echo $data['user_id'] ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['level']; ?></td>
    <td class="edit"><a href='edit.php?id=<?php echo $data['user_id'];?>'>Edit</a></td>
    <td class="delete"><a href='delete.php?id=<?php echo $data['user_id'];?>' background-color(#dff774)>Delete</a></td>
</tr>
<?php } ?>
</table>

    