<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - KitaSehat</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
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
            text-decoration: none;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: rgb(20, 180, 93);
            cursor: pointer;
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

        section {
            width: 100%;
            background-color: lightgrey;
            padding-top: 18px;
        }

        .description {
            box-sizing: border-box;
            padding-top: 10px;
            text-align: justify;
        }

        article {
            width: 1200px;
            background-color: skyblue;
            margin: auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section h1 {
            width: 90%;
            text-align: center;
            font-size: 25px;
            padding: 10px;
            background-color: orange;
            margin: auto;
        }

        section div {
            width: 1100px;
            margin: 35px auto;
            background-color: lightgreen;
            padding: 15px;
        }

        section p {
            margin-bottom: 10px;
        }

        section a.community {
            display: block;
            margin-bottom: 5px;
            color: blue;
            text-decoration: none;
        }

        section a.community:hover {
            text-decoration: underline;
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

    <section>
        <article>
            <h1>About Us</h1>
            <div class="description">
                <p>Halo semuanya, selamat datang di website resmi kami "KitaSehat". Disini, kami akan menuangkan beberapa informasi artikel penting yang berkaitan mengenai bidang kesehatan. Informasi di artikel yang kami buat dan kembangkan, akan kami usahakan untuk meringkasnya menjadi jelas, mudah dipahami, mudah diingat, singkat, dan tentunya informatif! 
                <br><br>Oh ya, buat kalian yang belum tahu tentang mengapa sih website ini dibuat dan ditujukan kepada kalian? Well, sebenarnya website ini dibuat oleh team kami bukan dengan tanpa alasan. Melainkan bahwa, untuk bisa mengedukasi para pengunjung atau user mengenai pentingnya menjalani hidup sehat di mana pun dan kapan pun kita berada. Dengan begitu, mereka dapat menambah wawasan mereka tentang pandangan hidup sehat yang lebih baik. 
                <br><br>Website yang bertemakan industri kesehatan ini mulai dibuat oleh team kreator kami pada tanggal 1 Januari hingga tanggal 10 Januari 2024. Hingga sekarang, kami sedang berusaha semaksimal mungkin untuk mengembangkan web "KitaSehat" kami agar bisa menjadi maju untuk waktu kedepannya. Bila ada kritik atau saran yang ingin disampaikan, mohon untuk kontak kami! Sekian, terimakasih.</p>
                <br><br>COME JOIN OUR COMMUNITY!!
                <br><a href="#" class="community">https://discord.com/</a>
                <br><a href="#" class="community">https://web.telegram.org/</a>
                <br><a href="#" class="community">https://web.whatsapp.com/</a>
                <br><a href="/halamanlogin/index.php">Kembali Ke Login</a>
            </div>
        </article>
    </section>

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
