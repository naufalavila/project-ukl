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
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Add</title>
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
    <form action="bmiproses.php" method="POST">
        <input type="hidden" value="<?php echo $bmi_id; ?>" name="bmi_id">
        
        <div class="container">
            <label>Weight:</label>
            <input type="text" name="weight" value="<?php echo $weight; ?>" placeholder="Kilograms">
        </div>
        
        <div class="container">
            <label>Height:</label>
            <input type="text" name="height" value="<?php echo $height; ?>" placeholder="Centimeters">
        </div>
        
        <div class="container">
            <label>Result:</label>
            <input type="text" name="result" value="<?php echo $result; ?>" placeholder="Ex: 24.5">
        </div>
            
        <?php if(isset($_GET['ubah'])) { ?>
            <button class="button" type="submit" name="bmiaksi" value="edit">Edit</button>
        <?php } else { ?>
            <button class="button" type="submit" name="bmiaksi" value="tambah">Tambah</button>
        <?php } ?>
        
        <a href="bmicrud.php">Back</a>
    </form>
</body>
</html>
