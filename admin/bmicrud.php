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
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
        }

        /* Buttons */
        body .page {
            margin-right: 10px;
            height: 25px;
            width: 95px;
            color: white;
            border: 0.5px solid black;
        }

        body .page :hover {
            background-color: #4aff62;
            border: 0.5px solid black;
        }

        .add-btn {
            background-color: #3241b3;
            color: white;
            font-weight: 650;
            padding: 0 4px;
            text-decoration: none;
        }

        .bmi-table {
            background-color: black;
            width: 680px;
            margin: auto;
            position: relative;
            top: 25px;
        }

        .bmi-table tr td {
            text-align: center;
        }

        .bmi-table tr,bmi-table th, bmi-table td {
            background-color: white;
            width: 110px;
        }
    </style>
</head>
<body>
    <div class="header" style="width: 100%; height: 40px; background-color: darkgreen; color:white; font-weight: 800; display: grid; place-items:center; font-size: 14px; font-family:sans-serif;">VIEW TABEL BMI</div>

    <a class= "page" href="http://localhost/kitasehat/admin/index.php"><button>View Table User</button></a>
    <a class= "page" href="http://localhost/kitasehat/admin/bmicrud.php"><button>View Table BMI</button></a>
    <a class= "page" href="http://localhost/kitasehat/admin/articleindex.php"><button>View Table Article</button></a>
    <a href="bmiedit.php" type="button" class="add-btn">Add Here</a>

    <table class="bmi-table">
        
            <tr>
                <th>BMi ID</th>
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
                    <a href="bmiedit.php?ubah=<?php echo $hasil['bmi_ID']?>" type="button" class="action-btn" style="border: none; padding: 2px 5px; background-color: #18a332; color: white; font-weight: 600; text-decoration: none;">Edit</a>
                    <a href="bmiproses.php?delete=<?php echo $hasil['bmi_ID']?>" name="delete"  type="button" class="action-btn" style="border: none; padding: 2px 5px; background-color: #ad3d21; color: white; font-weight: 600; text-decoration: none;">Delete</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>