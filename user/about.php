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

section {
    width: initial;
    background-color: lightgrey;
    height: 450px;
    padding-top: 18px;
}

.description {
    box-sizing: border-box;
    padding-top: 10px;
    padding-bottom: 10px;
}

article {
    width: 1200px;
    background-color: skyblue;
    height: 435px;
    margin: auto;
    position: static;
}

section h1 {
    width: 90%;
    text-align: center;
    font-size: 25px;
    padding: 3px 0;
    background-color: orange;
    margin: auto;
    position: relative;
    top: 14px;
}

section div {
    width: 1100px;
    padding-left: 15px;
    padding-right: 15px;
    margin-top: 35px;
    background-color: lightgreen;
    margin-left: auto;
    margin-right: auto;
}

section p {
    text-align: justify;
    text-justify: inter-word;
}


/* FOOTER */

.footer-1 {
    width: 100%;
    height: 40px;
    background-color: darkblue;
    color: white;
    font-weight: 900;
    font-family: Arial, Helvetica, sans-serif;
    display: grid;
    place-items: center;
    padding-top: 9px;
    padding-bottom: 9px;
}
    </style>
</head>
<body>
    <nav>
        <div class="judul"><h1>KitaSehat</h1></div>
        <div class="logo"><img src="logo kesehatan.jpg" alt="Logo Kesehatan"></div>
        <a href="index.php">Article</a>
        <a href="about.php">About</a>
        <a href="data.php">Poster</a>
    </nav>

    <section>
        <article>
            <h1>About Us</h1>
            <div class="description">
                <p>Halo semuanya, selamat datang di website resmi kami "KitaSehat". Disini, kami akan menuangkan beberapa informasi artikel penting yang berkaitan mengenai bidang kesehatan. Informasi di artikel yang kami buat dan kembangkan, akan kami usahakan untuk meringkasnya menjadi jelas, mudah dipahami, mudah diingat, singkat, dan tentunya informatif! 
                <br><br>Oh ya, buat kalian yang belum tahu tentang mengapa sih website ini dibuat dan ditujukan kepada kalian? Well, sebenarnya website ini dibuat oleh team kami bukan dengan tanpa alasan. Melainkan bahwa, untuk bisa mengedukasi para pengunjung atau user mengenai pentingnya menjalani hidup sehat di mana pun dan kapan pun kita berada. Dengan begitu, mereka dapat menambah wawasan mereka tentang pandangan hidup sehat yang lebih baik. 
                <br><br>Website yang bertemakan industri kesehatan ini mulai dibuat oleh team kreator kami pada tanggal 1 Januari hingga tanggal 10 Januari 2024. Hingga sekarang, kami sedang berusaha semaksimal mungkin untuk mengembangkan web "KitaSehat" kami agar bisa menjadi maju untuk waktu kedepannya. Bila ada kritik atau saran yang ingin disampaikan, mohon untuk kontak kami! Sekian, terimakasih.</p>
                <br><br>COME JOIN OUR COMMUNITY!!
                <br><a href="#" class= "community">https://discord.com/</a>
                <br><a href="#" class= "community">https://web.telegram.org/</a>
                <br><a href="#" class= "community">https://web.whatsapp.com/</a>
            </div>
        </article>
    </section>

    <footer class="footer-1">Thank you for visiting!</footer>
</body>
</html>