<?php

include ("../koneksi.php");

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

        body .page {
            margin-top: 10px;
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

        .bmi-table {
            background-color: black;
            width: 660px;
            margin: auto;
            position: relative;
            top: 25px;
        }

        .bmi-table tr,bmi-table th, bmi-table td {
            background-color: white;
            width: 110px;
        }
    </style>
</head>
<body>
    <div class="header" style="width: 100%; height: 40px; background-color: darkgreen; color:white; font-weight: 800; display: grid; place-items:center; font-size: 14px; font-family:sans-serif;">VIEW TABEL BMI</div>

    <a class= "page" href="http://localhost/halamanlogin/admin/index.php"><button>View Table User</button></a>
    <a class= "page" href="http://localhost/halamanlogin/admin/bmicrud.php"><button>View Table BMI</button></a>

    <table class="bmi-table">
        <tr>
            <th>No.</th>
            <th>BMi ID</th>
            <th>Weight</th>
            <th>Height</th>
            <th>Result</th>
            <th>Action</th>
        </tr>

        <?php
            $query = "SELECT * FROM bmi";
            $result = mysqli_query($mysqli,$query);
            $data = mysqli_fetch_assoc($result);

            $no = 1;
            while ($data) {
        ?> 
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['bmi_ID'] ?></td>
                <td><?= $data['weight'] ?></td>
                <td><?= $data['height'] ?></td>
                <td><?= $data['result'] ?></td>
                <td></td>
            </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>