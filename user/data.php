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
    width: 100%;
    background-color: lightslategray;
    height: 131vh;
}

.jukon {
    width: 98%;
    padding: 10px 0;
    background-color: orange;
    font-weight: 900;
    font-family: Tahoma;
    font-size: 20px;
    text-align: center;
    margin: auto;
    position: relative;
    top: 15px;
    margin-bottom: 15px;
}

.cont {
    position: relative;
    margin-top: 20px;
    font-size: 25px;
}

section .wrapper {
    margin-left: 20px;
    position: relative;
}

.jukon, .cont {
    color: white;
}

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
        <h1 class="jukon">Yuk Minum Air Dulu!</h1>
        <div class="img-wrapper">
            <img src="poster menjaga kesehatan.jpg" alt="Poster Manfaat Minum Air Putih" width="620px" height="750px">
        </div>
    </section>
    
    <footer class="footer-1">
        Thank you for visiting!
    </footer>
</body>
</body>
</html>