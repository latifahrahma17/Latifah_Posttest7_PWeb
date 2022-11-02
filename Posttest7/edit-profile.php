<?php
    require "config.php";
    if(isset($_GET['id'])){
        $query = mysqli_query($db, "SELECT * FROM pengguna JOIN gambar on pengguna.id = gambar.id_pengguna WHERE pengguna.id = $_GET[id]");
        $result = mysqli_fetch_assoc($query);
        $fullname = $result['fullname'];
        $username = $result['username'];
        $password = $result['password'];
        $konfirPass = $result['konfirPass'];
        $email = $result['email'];
        $birthDate = $result['birthDate'];
        $telpon = $result['telpon'];
        $gender = $result['gender'];
        $files = $result['file'];
    }

    if(isset($_POST['edit'])){
        $id = $_GET['id'];
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirPass = $_POST['konfirPass'];
        $email = $_POST['email'];
        $birthDate = $_POST['birthDate'];
        $telpon = $_POST['telpon'];
        $gender = $_POST['gender'];
        $file_gambar = $files;
        $query = mysqli_query($db, "UPDATE pengguna SET fullname='$_POST[fullname]', username='$_POST[username]', password='$_POST[password]', konfirPass='$_POST[konfirPass]', email='$_POST[email]', birthDate='$_POST[birthDate]', telpon='$_POST[telpon]', gender=' WHERE id=$_GET[id]$_POST[gender]' WHERE id=$_GET[id]");
        if($query){
            $up = mysqli_query($db, "UPDATE pengguna (gender) VALUES ($gender)");
            date_default_timezone_set("Asia/Makassar");
            $date = strtotime("now");
            $waktu = date("Y-m-d H:i:s", $date);
            unlink('files/'.$file_gambar);
            $gambar = $_FILES['file']['name'];
            $nama = $_POST['nama_gambar'];
            $a = explode('.', $gambar);
            $ekstensi = strtolower(end($a));
            $gambar_baru = "$nama.$ekstensi";
            $tmp = $_FILES['file']['tmp_name'];
            move_uploaded_file($tmp, "files/$gambar_baru");
            $query_gambar = mysqli_query($db, "UPDATE files SET nama_gambar='$nama', file='$gambar_baru' waktu='$waktu' WHERE id = '$id'");
            if($query_gambar){
                echo "Update File Berhasil";
                header("Location:index-profile.php");
            }else{
                echo "Update File Gagal";
            }
        }else{
            echo "Update Gagal";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-Profile</title>
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

    <div class="edit">
        <center class="ed">
            <h2>Edit Data Pengguna</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="fullname">Fullname</label><br>
                <input type="text" name="fullname" id="fullname" class="text-edit" value='<?=$fullname?>'><br><br>

                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" class="text-edit" value='<?=$username?>'><br><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" class="password-regis" value='<?=$password?>'><br><br>
                
                <label for="konfirpass">Konfirmasi Password</label><br>
                <input type="password" name="konfirPass" id="konfirPass" class="text-edit" value='<?=$konfirPass?>'><br><br>
                
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email" class="text-edit" value='<?=$email?>'><br><br>

                <label for="birthDate">Birth Date</label><br>
                <input type="date" name="birthDate" id="birthDate" class="text-edit" value='<?=$birthDate?>'>

                <label for="telpon">No Telpon</label><br>
                <input type="text" name="telpon" id="telpon" class="text-edit" value='<?=$telpon?>'><br><br>

                <input type="radio" name="gender" id="gender" class="text-edit" value='<?=$gender?>'><br>
                <label for="gender">Laki-laki</label><br>

                <input type="radio" name="gender" id="gender" class="text-edit" value='<?=$gender?>'><br>
                <label for="gender">Perempuan</label><br><br>

                <label for="nama_gambar">Nama File</label><br>
                <input type="text" name="nama_gambar" class="text-edit" value='<?=$files?>'><br><br>
                
                <label for="file">File</label><br>
                <input type="file" name="file" class="text-edit" value='<?=$gambar?>'><br><br>

                <input type="submit" name="edit" id="edit" value="Edit" class="btn-edit">
            </form>
        </center>
    </div>

    <script src="java.js"></script>
    <script src="jquery.js"></script>

</body>
</html>