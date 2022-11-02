<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
$fullname = $_SESSION["fullname"];
$username = $_SESSION["username"];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
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
                    <a href="about.php" class="round"><b><img src="files/<?=$row['file']?>" alt="files/<?=$row['file']?>"></b></a>
                </li>
                <li class="nav-item">
                    <a href="logout.php"><b>LOGOUT</b></a>
                </li>
            </ul>
        </nav>
    </div>

    <center>
        <div class="aboutme" id="aboutme">
            <div class="aboutme-desc">
                <h2>ABOUT ME</h2><br><br>

                <center>
                    <img src="https://st.depositphotos.com/12227958/60925/v/450/depositphotos_609252996-stock-illustration-cartoon-astronaut-taking-camera.jpg" alt="gambar" width="200">
                    <h4>
                        <table>
                            <tr>
                                <td>Fullname</td>
                                <td>:</td>
                                <td><?php echo $fullname;?>></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><?php echo $username;?>></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $email;?>></td>
                            </tr>
                            <tr>
                                <td>Birth Date</td>
                                <td>:</td>
                                <td><?php echo $birthDate;?>></td>
                            </tr>
                            <tr>
                                <td>telpon</td>
                                <td>:</td>
                                <td><?php echo $telpon;?>></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:</td>
                                <td><?php echo $gender;?>></td>
                            </tr>
                        </table>
                    </h4>
                </center>
            </div>
        </div>

        <div class="footer">
            <h1>@Copyright 2022 - by 097_Latifah.</h1>
        </div>

    </center>

    <script src="java.js"></script>
    <script src="jquery.js"></script>
    
</body>
</html>