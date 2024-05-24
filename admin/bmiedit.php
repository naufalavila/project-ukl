<!DOCTYPE html>

<?php
    include ("../koneksi.php");

    $bmi_id = '';
    $weight = '';
    $height = '';
    $result = '';


    if(isset($_GET['ubah'])) {
        $bmi_id = $_GET['ubah'];

        $query = "SELECT * FROM bmi WHERE bmi_ID = '$bmi_id';";
        $sql = mysqli_query($conn, $query);

        $hasil = mysqli_fetch_assoc($sql);

        $weight = $hasil['weight'];
        $height = $hasil['height'];
        $result = $hasil['result'];
        
        //var_dump($hasil);
        //die();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bmi add</title>
    <style>
        form .container label {
            font-size: 18px;
            font-weight: 600px;
        }

        form .container input {
            margin-bottom: 15px;
            padding-left: 5px;
        }

        .button, form a {
            background-color: #9341e0;
            color: white;
            font-weight: 600;
            margin-right: 7px;
            border: none;
            border-radius: 15px;
            padding: 5px 10px;
            
        }
    </style>
</head>
<body>
    <form action="bmiproses.php" method="POST">
        <input type="hidden" value = "<?php echo $bmi_id; ?>" name="bmi_id">
        
        <div class="container">
            <label>Weight :</label><br>
            <input type="text" name="weight" value = "<?php echo $weight; ?>" placeholder="kilograms">
        </div>
        
        <div class="container">
            <label>Height :</label><br>
            <input type="text" name="height" value = "<?php echo $height; ?>" placeholder="centimeters">
        </div>
        
        <div class="container">
            <label>Result :</label><br>
            <input type="text" name="result" value = "<?php echo $result; ?>" placeholder="Ex: 24.5">
        </div>
            
        <?php
        if(isset($_GET['ubah'])) {
        ?>
            <button class="button" type="submit" name="bmiaksi" value="edit">Edit</button>
        <?php
            } else {
        ?>
            <button class="button" type="submit" name="bmiaksi" value="tambah">Tambah</button>
        <?php
            }
        ?>
        
        <a href="bmicrud.php" type="button">Back</a>
    </form>
</body>
</html>