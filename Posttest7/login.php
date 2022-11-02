<?php
require "config.php";
session_start();
if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($db, "SELECT * FROM pengguna WHERE rUsername = '$rUsername'");
        $result = mysqli_fetch_assoc($query);
        $username = $result['username'];
        if(password_verify($password,$result['password'])){
            $_SESSION['login'] = true;
            $_SESSION['fullname'] = $result["fullname"];
            $_SESSION['username'] = $result['username'];
            echo "
            <script>
                alert('Selamat Datang $username');
                document.location.href = 'homePage.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Username dan Password Salah');
            </script>
            ";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <div class="login">
        <center class="log">
            <h2>LOGIN</h2><br><br>
            <form action="login.php" method="get">

                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" class="text-login"><br><br>

                <label for="password">Password</label><br>
                <input type="text" name="password" id="password" class="text-login"><br><br>

                <p><b>Belum Punya Akun ? <a href="registrasi.php">Registrasi</a></b></p><br>

                <input type="submit" name="submit" id="submit" class="btn-login">

            </form>
        </center>
    </div>

    <script src="java.js"></script>
    <script src="jquery.js"></script>

</body>
</html>