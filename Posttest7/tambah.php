<?php
require "config.php";
if(isset($_POST['pSubmit'])){
    $pesan = $_POST['pesan'];
    $tanggal = $_POST['tanggal'];
    $fotografer = $_POST['fotografer'];

    date_default_timezone_set("Asia/Makassar");
    $date = strtotime("now");
    $waktu = date("Y-m-d H:i:s", $date);
    $insert = mysqli_query($db, "INSERT INTO pesanan (pesan,fotografer) VALUES ($pesan,$fotografer)");
    $query = mysqli_query($db, "INSERT INTO  pesanan (pesan,tanggal,fotografer) VALUES ('$pesan','$tanggal','$fotografer')");
    if(!empty($_FILES['bukti']['name'])){
        $query = mysqli_query($db, "SELECT * FROM pesanan WHERE id_pengguna='$id_pengguna'");
        $result = mysqli_fetch_assoc($query);
        $id_pesan = $result['id_pesan'];
        $gambar = $_FILES['bukti']['name'];
        $a = explode('.', $gambar);
        $ekstensi = strtolower(end($a));
        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['bukti']['tmp_name'];
        if(move_uploaded_file($tmp,"pesanan/$gambar_baru")){
            $query = mysqli_query($db, "INSERT INTO bukti VALUES ('', $id_pesan, '$gambar_baru', '$waktu')");
            if($query){
                header("Location: index-pesan.php");
            }
            else{
                echo "Tambah Pesanan Gagal";
            }
        }
    }
}
?>