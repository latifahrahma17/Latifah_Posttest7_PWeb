<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
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
                    <b class="mode" id="mode">MODE</b>
                </li>
                <li class="nav-item">
                    <a href="login.php"><b>LOGIN</b></a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="pesan">
        <center class="pes">
            <h2>Pesan</h2><br><br>
            <form action="" method="post">

                <input type="radio" name="pesan" id="pesan" class="radio-pesan"><br>
                <label for="pesan">1 Jam</label><br><br>

                <input type="radio" name="pesan" id="pesan" class="radio-pesan"><br>
                <label for="pesan">3 Jam</label><br><br>

                <input type="radio" name="pesan" id="pesan" class="radio-pesan"><br>
                <label for="pesan">5 Jam</label><br><br>

                <input type="radio" name="pesan" id="pesan" class="radio-pesan"><br>
                <label for="pesan">8 Jam</label><br><br>

                <input type="radio" name="pesan" id="pesan" class="radio-pesan"><br>
                <label for="pesan">10 Jam</label><br><br>

                <label for="tanggal">Waktu</label><br><br>
                <input type="date" name="tanggal" id="tanggal" class="text-pesan"><br><br>

                <input type="radio" name="fotografer" id="fotografer" class="radio-pesan"><br>
                <label for="fotografer">Jimmy Iskandar</label><br><br>

                <input type="radio" name="fotografer" id="fotografer" class="radio-pesan"><br>
                <label for="fotografer">Oscar Motuloh</label><br><br>

                <input type="radio" name="fotografer" id="fotografer" class="radio-pesan"><br>
                <label for="fotografer">Diera Bachir</label><br><br>

                <input type="submit" name="pSubmit" id="pSubmit" value="Pesan" class="btn-pesan">

            </form>
        </center>
    </div>

    <script src="java.js"></script>
    <script src="jquery.js"></script>

</body>
</html>