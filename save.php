<?php
include "connection.php";
$no_layanan = $_POST['no_layanan'];
$tanggal = $_POST['tanggal'];
$nopol = $_POST['nopol'];
$pemilik = $_POST['pemilik'];
$id_montir=$_POST['id_montir'];
$nama_montir=$_POST['nama_montir'];
$merk_kdr = $_POST['merk_kdr'];
$jenis_kdr = $_POST['jenis_kdr'];
$deskripsi = $_POST['deskripsi'];
$biaya = $_POST['biaya'];
$save = mysqli_query($data, "INSERT INTO layanan VALUES('$no_layanan','$tanggal','$nopol','$pemilik','$id_montir','$nama_montir','$merk_kdr','$jenis_kdr','$deskripsi','$biaya')");
if ($save) {
    header("location: show.php");
} else {
    echo "gagal menambahkan";
}
?>