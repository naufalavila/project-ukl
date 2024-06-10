<?php

include ("../koneksi.php");

$query = "SELECT * FROM bmi";
$sql = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI CRUD</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            width: 100%;
            height: 40px;
            background-color: darkgreen;
            color: white;
            font-weight: 800;
            display: grid;
            place-items: center;
            font-size: 14px;
            font-family: sans-serif;
        }

        .button-container {
            margin: 20px 0;
            text-align: center;
        }

        .button-container a {
            margin-right: 10px;
            display: inline-block;
        }

        .button-container button, .button-container a.page {
            height: 25px;
            width: 150px;
            color: white;
            border: 0.5px solid black;
            background-color: #28a745;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            line-height: 25px;
        }

        .button-container button:hover, .button-container a.page:hover {
            background-color: #218838;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: center;
        }

        th, td {
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .action-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
        }

        .action-btn.edit {
            background-color: #18a332;
        }

        .action-btn.delete {
            background-color: #ad3d21;
        }

        .create-btn {
            display: block;
            width: fit-content;
            margin: 10px auto;
            padding: 10px 20px;
            background-color: #3241b3;
            color: white;
            text-align: center;
            text-decoration: none;
            font-weight: 650;
            border-radius: 5px;
        }

        .logout-btn {
            height: 25px;
            width: 150px;
            color: white;
            border: 0.5px solid black;
            background-color: #dc3545;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            line-height: 25px;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

    </style>
</head>
<body>
    <header class="header">VIEW TABEL BMI</header>
    
    <div class="button-container">
        <a class="page" href="index.php"><button>View Table User</button></a>
        <a class="page" href="bmicrud.php"><button>View Table BMI</button></a>
        <a class="page" href="articleindex.php"><button>View Table Article</button></a>
        <a href="bmiedit.php" class="create-btn">Add Here</a>
        <a href="../index.php" class="logout-btn">Logout</a>
    </div>

    <table>
        <tr>
            <th>BMI ID</th>
            <th>Weight (kg)</th>
            <th>Height (cm)</th>
            <th>Result (Kg/M2)</th>
            <th>Action</th>
        </tr>

        <?php
            while ($hasil = mysqli_fetch_assoc($sql)) {
        ?>
        <tr>
            <td><?php echo $hasil['bmi_ID']?></td>
            <td><?php echo $hasil['weight']?></td>
            <td><?php echo $hasil['height']?></td>
            <td><?php echo $hasil['result']?></td>
            <td>
                <a href="bmiedit.php?ubah=<?php echo $hasil['bmi_ID']?>" class="action-btn edit">Edit</a>
                <a href="bmiproses.php?delete=<?php echo $hasil['bmi_ID']?>" class="action-btn delete" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>
