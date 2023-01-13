<?php
include "connection.php";

if (!isset($_GET['no_layanan'])) {
    header('location: show.php');
}

$no_layanan = $_GET['no_layanan'];

$sql = "SELECT * FROM layanan WHERE no_layanan=$no_layanan";
$query = mysqli_query($data, $sql);
$data = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="stylee.css">
    </head>

    <body>
        <h1 align="center"></h1>
        <table border="0" align="center">

            <form action="saveupdate.php" method="POST" name="form">
              <tr>
                <td>Nomor Layanan</td>
                <td><input type="text" name="no_layanan" value="<?php echo $data['no_layanan'] ?>" /></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>" /></td>
              </tr>
              <tr>
                <td>Nomor Polisi</td>
                <td><input type="text" name="nopol" value="<?php echo $data['nopol'] ?>" /></td>
              </tr>
              <tr>
                <td>Nama Pemilik</td>
                <td><input type="text" name="pemilik" value="<?php echo $data['pemilik'] ?>" /></td>
              </tr>
              <tr>
                <td>ID Montir</td>
                <td><input type="text" name="id_montir" value="<?php echo $data['id_montir'] ?>" /></td>
              </tr>
              <tr>
                <td>Nama Montir</td>
                <td><input type="text" name="nama_montir" value="<?php echo $data['nama_montir'] ?>" /></td>
              </tr>
              <tr>
              <tr>
                <td>Merk Kendaraan</td>
                <td><input type="text" name="merk_kdr" value="<?php echo $data['merk_kdr'] ?>" /></td>
              </tr>
              <tr>
                <td>Jenis Kendaraan</td>
                <td><input type="text" name="jenis_kdr" value="<?php echo $data['jenis_kdr'] ?>" /></td>
              </tr>
              <tr>
              <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?php echo $data['deskripsi'] ?>" /></td>
              </tr>
              <tr>
                <td>Biaya</td>
                <td><input type="text" name="biaya" value="<?php echo $data['biaya'] ?>" /></td>
              </tr>
              <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="UPDATE">
                        <a href="show.php"><input type="button" name="button1" value="KEMBALI"></a>
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>