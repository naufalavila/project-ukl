<?php
// Mulai session di awal file
session_start();
include ('../koneksi.php');

// Inisialisasi variabel pesan hasil BMI
$bmi_result_message = "";

// Periksa apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil tinggi dan berat dari form
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    // Hitung BMI
    $bmi = $weight / (($height / 100) * ($height / 100));
    $bmi = round($bmi, 2);

    // Tentukan kategori BMI
    if ($bmi < 18.5) {
        $category = "Underweight";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        $category = "Normal weight";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        $category = "Overweight";
    } else {
        $category = "Obesity";
    }

    // Tampilkan hasil BMI dan kategori
    $bmi_result_message = "Your BMI is " . $bmi . " kg/m². You are " . $category . ".";

    // Ambil user_ID dari session
    $user_ID = $_SESSION['user_ID'];

    // Masukkan data ke dalam database
    $sql = "INSERT INTO bmi (weight, height, result, user_ID) VALUES ('$weight', '$height', '$bmi', '$user_ID')";

    if ($conn->query($sql) === TRUE) {
        //echo "BMI data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f9;
            color: #333;
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
        }

        nav {
            width: 100%;
            height: 110px;
            background-color: #31d6a5;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        nav a {
            width: 140px;
            height: 50px;
            background-color: #18c767;
            border: 2px solid grey;
            display: grid;
            place-items: center;
            color: beige;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #14a357;
            cursor: pointer;
        }

        nav .logo img {
            width: 80px;
            height: 80px;
        }

        .judul {
            background-color: #50a78a;
            width: 250px;
            height: 60px;
            display: grid;
            place-items: center;
        }

        .judul h1 {
            color: beige;
            font-family: 'Courier New', Courier, monospace;
            font-size: 40px;
        }

        .wrapper {
            width: 90%;
            max-width: 500px;
            background-color: white;
            font-family: 'Roboto', sans-serif;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 40px auto;
            padding: 30px;
        }

        .wrapper h2 {
            line-height: 2.5;
            color: #4777fc;
            text-align: center;
            font-weight: 650;
            margin-bottom: 20px;
        }

        .wrapper form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .wrapper form label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .wrapper form input[type=text] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .wrapper form input[type=submit] {
            width: 100%;
            padding: 10px;
            background-color: #4777fc;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .wrapper form input[type=submit]:hover {
            background-color: #365bb5;
        }

        .wrapper .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }

        .logout-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #d32f2f;
        }

        footer {
            background-color: darkblue;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;
        }

        .social-links {
            margin-top: 10px;
        }

        .social-links a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #ccc;
        }
    </style>
</head>
<body>
    <nav>
        <div class="judul"><h1>KitaSehat</h1></div>
        <div class="logo"><img src="logo kesehatan.jpg" alt="Logo Kesehatan"></div>
        <a href="index.php">Article</a>
        <a href="about.php">About</a>
        <a href="data.php">BMI</a>
        <form action="logout.php" method="POST">
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </nav>

    <div class="wrapper">
        <!-- HTML form -->
        <h2 class="check-bmi">CHECK BMI</h2>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="height">Height (cm):</label>
            <input type="text" name="height" id="height" required>

            <label for="weight">Weight (kg):</label>
            <input type="text" name="weight" id="weight" required>

            <input type="submit" value="Submit">

            <!-- Display BMI result -->
            <div class="result"><?php echo $bmi_result_message; ?></div>
        </form>
    </div>
    
    <footer>
        <p>Thank you for visiting!</p>
        <p>Sosial Media Kami :</p>
        <div class="social-links">
            <a href="#" target="_blank">Facebook</a> |
            <a href="#" target="_blank">Instagram</a> |
            <a href="#" target="_blank">Telegram</a> |
            <a href="#" target="_blank">YouTube</a>
        </div>
    </footer>
</body>
</html>
