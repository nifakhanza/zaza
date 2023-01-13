<?php
include "connection.php";
if (isset($_GET['no_layanan'])) {
    $no_layanan = $_GET['no_layanan'];

    $hapus = mysqli_query($data, "DELETE FROM layanan WHERE no_layanan=$no_layanan");

    if ($hapus) {
        header("location: show.php");
    } else {
        die("Gagal menghapus");
    }
}
?>