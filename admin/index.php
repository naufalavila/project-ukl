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

        body .page {
            height: 25px;
            width: 95px;
            color: white;
            border: 1.5px solid black;
        }

        body .page :hover {
            background-color: #4aff62;
            border: 1.5px solid black;
        }

        .table {
            margin: auto;
            position: relative;
            top: 25px;
            width: 660px;
            background-color: black;
        }

        .table tr, .table th, .table td {
            width: 110px;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="header" style="width: 100%; height: 40px; background-color: darkgreen; color:white; font-weight: 800; display: grid; place-items:center; font-size: 14px; font-family:sans-serif;">VIEW TABEL USER</div>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
        </tr>

        <?php
            //SELECT TABEL USER DARI DATABASE
            include ("../koneksi.php");
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

    <a class= "page" href="http://localhost/halamanlogin/admin/index.php"><button>View Table User</button></a>
    <a class= "page" href="http://localhost/halamanlogin/admin/bmicrud.php"><button>View Table BMI</button></a>
</body>
</html>
    