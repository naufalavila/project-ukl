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
    box-sizing: border-box;
}

nav {
    width: 100%;
    height: 110px;
    background-color: rgb(49, 214, 165);
    display: flex;
    justify-content: space-around;
    align-items: center;
}

nav a {
    width: 140px;
    height: 50px;
    background-color: rgb(24, 199, 103);
    border: 2px solid grey;
    display: grid;
    place-items: center;
    color: beige;
    font-weight: bold;
    
}

nav a:hover {
    cursor: grab;
}

nav .logo img {
    width: 80px;
    height: 80px;
}

.judul {
    background-color: rgb(80, 167, 138);
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

.footer-1 {
    width: 100%;
    height: 48px;
    background-color: darkblue;
    color: white;
    font-weight: 900;
    font-family: Arial, Helvetica, sans-serif;
    display: grid;
    place-items: center;
    padding-top: 9px;
    padding-bottom: 9px;
    text-transform: capitalize;
}

section img {
    position: static;
    margin-top: 15px;
    margin-bottom: 25px;
    margin:auto;
    width: 570px;
    height: 120vh;
 }

 .img-wrapper {
    width: 840px;
    height: 100%;
    background-color: lightskyblue;
    margin: auto;
    text-align: center;
}

body {
    background-color: #9dfae8;
}

.wrapper {
    width: 500px;
    height: 370px;
    background-color: white;
    font-family: 'Roboto', sans-serif;
    border-radius: 10px;
    box-shadow: 4px 4px #899190;
    margin: 22px auto;
    padding: 30px;
}

.wrapper h2 {
    line-height: 2.5;
    color: #4777fc;
    text-align: center;
    font-weight: 650;
}

.section1 input, .section2 input {
    width: 200px;
    padding: 3.5px;
    border-color: #4777fc;
    border-radius: 4px;
    outline: none;
    font-size: 15px;
}

.submit input {
    width: 85px;
    height: 30px;
    background-color: lightgrey;
    color: #3e4045;
    font-weight: 700;
    border-color: #3e4045;
    margin-top: 20px;
    margin-right: 15px;
    border-radius: 3.5px;
}

.submit input:hover {
    background-color: #3e4045;
    color: white;
    transition: .4s;
}

.check-bmi {
    color: #b0850e;
    margin: auto;
    padding-top: 5px;
    padding-bottom: 5px;
}

.wrapper form input[type=Submit] {
    width: 60px;
    height: 22px;
    background-color: lightcyan;
    color: green;
    margin-top: 5px;
    border: 2px solid darkgreen;
    font-size: 14px;
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
    </nav>

<div class="wrapper">
    <?php
    // Database connection parameters
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

    // Initialize variables
    $bmi_result_message = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve height and weight from the form
        $height = $_POST["height"];
        $weight = $_POST["weight"];

        // Calculate BMI
        $bmi = $weight / (($height / 100) * ($height / 100));
        $bmi_result_message = "Your BMI is " . round($bmi, 2) . " kg/cm².";

        // Insert data into the database
        $sql = "INSERT INTO bmi (weight, height, result) VALUES ('$weight', '$height', '$bmi')";

        if ($conn->query($sql) === TRUE) {
            echo "BMI data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close connection
    $conn->close();
    ?>

    <!-- HTML form -->
    <h2 class="check-bmi">CHECK BMI</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Height (cm): <input type="text" name="height"><br>
        Weight (kg): <input type="text" name="weight"><br>
        <input type="submit" value="Submit">
            
        <!-- Display BMI result -->
        <?php echo $bmi_result_message; ?>
    </form>
</div>
    
    <footer class="footer-1">
        Thank you for visiting!
    </footer>

</body>
</body>
</html>


