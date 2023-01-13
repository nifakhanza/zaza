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
$update = mysqli_query($data, "UPDATE layanan SET tanggal='$tanggal',nopol='$nopol',pemilik='$pemilik',id_montir='$id_montir',nama_montir='$nama_montir',merk_kdr='$merk_kdr',jenis_kdr='$jenis_kdr',deskripsi='$deskripsi',biaya='$biaya' WHERE no_layanan='$no_layanan'");
if ($update) {
    header("location: show.php");
} else {
    echo "gagal menambahkan";
}
?>