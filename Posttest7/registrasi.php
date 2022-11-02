<?php
require "config.php";
if(isset($_POST['rSubmit'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['rUsername'];
    $password = $_POST['rPassword'];
    $konfirmasi = $_POST['konfirPass'];
    $email = $_POST['email'];
    $birthDate = $_POST['birthDate'];
    $telpon = $_POST['telpon'];
    $gender = $_POST['gender'];
    $query = mysqli_query($db, "SELECT * FROM pengguna WHERE rUsername = '$rUsername'");
    if(mysqli_fetch_assoc($query)){
        
        echo "
        <script>
            alert('Username sudah digunakan');
        </script>
        ";
    } else {
        if($password == $konfirmasi){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = mysqli_query($db, "INSERT INTO user VALUES ('','$fullname', '$username', '$password')");
            if($query){
                echo "
                <script>
                    alert('Registrasi Berhasil');
                    document.location.href = 'login.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Registrasi Gagal');
                </script>
                ";
            }
        } else {
            echo "
            <script>
                alert('Password dan konfirmasi password anda berbeda');
            </script>
            ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
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

    <div class="regis">
        <center class="reg">
            <h2>REGISTRASI</h2><br><br>
            <form action="login.php" method="post">

                <label for="fullname">Fullname</label><br>
                <input type="text" name="fullname" id="fullname" class="text-regis"><br><br>

                <label for="username">Username</label><br>
                <input type="text" name="rUsername" id="rUsername" class="text-regis"><br><br>

                <label for="password">Password</label><br>
                <input type="password" name="rPassword" id="rPassword" class="password-regis"><br><br>
                
                <label for="konfirpass">Konfirmasi Password</label><br>
                <input type="password" name="konfirPass" id="konfirPass" class="text-regis"><br><br>
                
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email" class="text-regis"><br><br>

                <label for="birthDate">Birth Date</label><br>
                <input type="date" name="birthDate" id="birthDate" class="text-regis"><br><br>

                <label for="telpon">No Telpon</label><br>
                <input type="text" name="telpon" id="telpon" class="text-regis"><br><br>

                <input type="radio" name="gender" id="gender" class="radio-regis">
                <label for="gender">Laki-laki</label><br>

                <input type="radio" name="gender" id="gender" class="radio-regis">
                <label for="gender">Perempuan</label><br><br>

                <input type="submit" name="rSubmit" id="rSubmit" value="Submit" class="btn-regis">

            </form>
        </center>
    </div>

    <script src="java.js"></script>
    <script src="jquery.js"></script>

</body>
</html>