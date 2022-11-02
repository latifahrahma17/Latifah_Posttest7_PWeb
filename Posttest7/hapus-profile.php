<?php
require "config.php";
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
if(isset($_GET['id'])){
    $query_lihat = mysqli_query($db, "SELECT * FROM gambar WHERE id_pengguna = $_GET[id_pengguna]");
    $result = mysqli_fetch_assoc($query_lihat);
    $file_gambar = $result['file'];
    $query = mysqli_query($db,"DELETE FROM pengguna WHERE id=$_GET[id]");
    if($query){
        unlink('files/'.$file_gambar);
        $query_gambar = mysqli_query($db, "DELETE FROM gambar WHERE id_pengguna = $_GET[id_pengguna]");
        header("Location:index-profile.php");
    } 
    else {
        echo "Hapus Akun Gagal";
    }
}
?>