<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
require "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dyphoto</title>
    <link rel="stylesheet" href="stylesheet/style2.css">
</head>

<body>
    <h1 class="judul">Pengguna dyphoto</h1>
    <div class="list-table center" style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th colspan="10" class="thead">
                        <h3 class="center">Daftar Pengguna</h3>
                    </th>
                    <th style="width: 20px;" colspan="2">
                        <a href="registrasi.php" class="tambah">Tambah</a>
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th nowrap>Fullname</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Waktu</th>
                    <th>Nama File</th>
                    <th>File</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "config.php";
                $query = mysqli_query($db, "SELECT * FROM pengguna INNER JOIN files ON pengguna.id=files.id_pengguna");
                $i = 1;
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td nowrap><?=$row['Fullname']?></td>
                        <td><?=$row['rUsername']?></td>
                        <td><?=$row['rPassword']?></td>
                        <td><?=$row['birthDate']?></td>
                        <td><?=$row['gender']?></td>
                        <td><?=$row['waktu']?></td>
                        <td><?=$row['nama_gambar']?></td>
                        <td><img src="files/<?=$row['file']?>" width="60px" ></td>
                        <?php
                        $no = 1;
                        if (isset($_GET['submit'])) {
                            $search = $_GET['search'];
                            $query = mysqli_query($db, "SELECT * FROM pengguna INNER JOIN gambar ON pengguna.id=gambar.id_pengguna WHERE fullname LIKE '%$search%'");;
                        } else {
                            $query = mysqli_query($db, "SELECT * FROM pengguna INNER JOIN gambar ON pengguna.id=gambar.id_pengguna");
                        }
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td nowrap><?=$row['fullname']?></td>
                            <td><?=$row['rUsername']?></td>
                            <td><?=$row['rPassword']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['birthDate']?></td>
                            <td><?=$row['gender']?></td>
                            <td><?=$row['waktu']?></td>
                            <td><img src="files/<?=$row['file']?>" width="60px" ></td>


                        <td class="edit">
                            <a href="edit-profile.php?id=<?=$row['id']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </td>
                        <td class="hapus">
                            <a href="hapus-profile.php?id=<?=$row['id']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <link rel="stylesheet" href="stylesheet/style.css">
    <script src="java.js"></script>
    <script src="jquery.js"></script>

</body>
</html>

