<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="stylesheet/style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="header">
        <nav>
            <a href="http://localhost/Posttest7/index.php">
                <p class="logo">
                    <img src="images/logo.PNG" alt="dy_photo" width="250" title="dy_photo">
                </p>
            </a>

            <ul class="nav-link">
                <li class="nav-item">
                    <a href="http://localhost/Posttest7/index.php"><b class='fas fa-home'>HOME</b></a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/Posttest7/about.php"><b class='fas fa-camera-retro'>ABOUT ME</b></a>
                </li>
                <li class="nav-item">
                    <b class="mode" id="mode">MODE</b>
                </li>
                <li class="nav-item">
                    <a href="logout.php"><b>LOGOUT</b></a>
                </li>
            </ul>
        </nav>
    </div>

    <center class="main-container">
        <div class="main" id="main">

            <div class="content section" style="max-width:500px">
                <img class="mySlides" src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2019/08/2.-Perhatikan-Komposisi.jpg" style="width:100%">
                <img class="mySlides" src="https://adindalazuardi.weebly.com/uploads/4/1/3/9/41396249/1188207.jpg?412" style="width:100%">
                <img class="mySlides" src="https://glints.com/id/lowongan/wp-content/uploads/2021/04/pahami-dasar-dasar-fotografi.png" style="width:100%">
            </div> 
    
            <div class="contents">
                <h1><img src="images/logo.PNG" alt="dy_photo"></h1>
                <h2>Temukan Fotografer Favoritmu</h2>
                <div class="contents-item">
                    <p class="container-item">
                        <a href="#">
                            <img src="https://foto.co.id/wp-content/uploads/2017/01/jimmy-fotografer.jpg" alt="Fotografer" width="400" title="Jimmy Iskandar">
                            <br><b>Jimmy Iskandar</b>
                        </a>
                        <a href="#">
                            <img src="https://foto.co.id/wp-content/uploads/2017/01/oscar-motuloh1-jpeg.jpg" alt="Fotografer" width="300" title="Oscar Motuloh">
                            <br><b>Oscar Motuloh</b>
                        </a>
                        <a href="#">
                            <img src="https://foto.co.id/wp-content/uploads/2017/01/diera-bachir-jpeg.jpg" alt="Fotografer" width="400" title="Diera Bachir">
                            <br><b>Diera Bachir</b>
                        </a>
                    </p>
                </div>

                <h2>Harga</h2>
                <h3>Dapatkan Fotomu Mulai dari Rp. 150.000/Jam</h3>
                <center>
                    <li class="harga"><b>1 Jam</b><br>10 Foto</li>
                    <li class="harga"><b>3 Jam</b><br>30 Foto</li>
                    <li class="harga"><b>5 Jam</b><br>50 Foto</li>
                    <li class="harga"><b>8 Jam</b><br>80 Foto</li>
                    <li class="harga"><b>10 Jam</b><br>100 Foto</li>
                </center>
                <button class="btn-pesan"><a href="pesan.php">Pesan Sekarang</a></button>
            </div>v

            <div class="about" id="about">
                <div class="about-desc">
                    <h1><img src="images/logo.PNG" alt="dy_photo"></h1>
                    <h2>CONTACT</h2>
                    <h3>
                        <li class="contact">Jl. Planet Gang Galaksi, Luar Angkasa.</li>
                        <li class="contact">hai@dyphoto.com</li>
                        <li class="contact">+62 823 456 789</li>
                    </h3>
    
                    <center>
                        <img src="https://st.depositphotos.com/12227958/60925/v/450/depositphotos_609252996-stock-illustration-cartoon-astronaut-taking-camera.jpg" alt="gambar" width="200">
                        <h4>
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>Latifah Nur Rahmawati</td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td>2009106097</td>
                                </tr>
                                <tr>
                                    <td>Prodi</td>
                                    <td>:</td>
                                    <td>Informatika</td>
                                </tr>
                                <tr>
                                    <td>Angkatan</td>
                                    <td>:</td>
                                    <td>2020</td>
                                </tr>
                            </table>
                        </h4>
                    </center>
                </div>
            </div>

            <div class="footer">
                <h1>@Copyright 2022 - by 097_Latifah.</h1>
            </div>
    
        </div>
    </center>

    <link rel="stylesheet" href="stylesheet/style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="java.js"></script>
    <script src="jquery.js"></script>
    
</body>
</html>