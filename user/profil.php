<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="profil.css">
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

.judul {
    background-color: rgb(80, 167, 138);
    width: 250px;
    height: 60px;
    display: grid;
    place-items: center;

}

img {
    width: 80px;
    height: 80px;
}

.judul h1 {
    color: beige;
    font-family: 'Courier New', Courier, monospace;
    font-size: 40px;
}

section h1 {
    background-color: orange;
    padding-top: 6px;
    padding-bottom: 6px;
    width: 100%;
    text-align: center;
    font-size: 32px;
    font-family: sans-serif;
}

.profil {
    width: 100%;
    height: 10.5cm;
    padding: 0px;
    background-color: rgb(228, 228, 228);
}

.description {
    margin-top: 15px;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: rgb(105, 79, 79);
    width: 98%;
}

.data {
    color: white;
    font-weight: bold;
    font-size: 25px;
    margin-left: 15px;
}

footer {
    width: 100%;
    height: 100px;
    background-color: rgb(82, 80, 80);
    font-size: 22px;
    display: grid;
    place-items: center;
    color: white;
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
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
        <div class="profil">
            <h1>The Creator's Profile!</h1>
            <div class="description">
                <div class="data">Nama: Muhammad Naufal Avila</div>
                <div class="data">Birthday: 03 March 2008</div>
                <div class="data">Gender: Laki-laki</div>
                <div class="data">Umur: 15 Tahun</div>  
                <div class="data">Class: X SIJA 2/20</div>
                <div class="data">Address: Perum. Graha Juanda, Blok C-35, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur</div>
                <div class="data">Contact: 082310100834</div>
                <div class="data">Email: naufalavila@gmail.com</div>
                <div class="data">Agama: Islam</div>
            </div>
        </div>

    </section>

    <footer>Thanks For Visiting Us!</footer>

</body>