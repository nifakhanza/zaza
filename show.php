<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM layanan</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <h1 align="center">FORM layanan</h1>

    <table border="1">
        <tr>
            <th>NO. URUT</th>
            <th>NOMER LAYANAN</th>
            <th>TANGGAL</th>
            <th>NOMER POLISI</th>
            <th>PEMILIK</th>
            <th>ID MONTIR</th>
            <th>NAMA MONTIR</th>
            <th>MERK KENDARAAN</th>
            <th>JENIS KENDARAAN</th>
            <th>DESKRIPSI</th>
            <th>BIAYA</th>
            <th>AKSI</th>
        </tr>
        <?php
        include "connection.php";
        $no = 1;
        $query = mysqli_query($data, "SELECT * FROM layanan");
        while ($data = mysqli_fetch_array($query)) {
            ?>
        <div class="tabel">
           <tr>
                <td><?php echo $no++ ?></td> </div>
                <td><?php echo $data['no_layanan'];?></td>
                <td><?php echo $data['tanggal'];?></td>
                <td><?php echo $data['nopol'];?></td>
                <td><?php echo $data['pemilik'];?></td>
                <td><?php echo $data['id_montir'];?></td>
                <td><?php echo $data['nama_montir'];?></td>
                <td><?php echo $data['merk_kdr'];?></td>
                <td><?php echo $data['jenis_kdr'];?></td>
                <td><?php echo $data['deskripsi'];?></td>
                <td><?php echo $data['biaya'];?></td>
                <td><a href='update.php?no_layanan="<?php echo $data['no_layanan']?>"'>UPDATE</a>
                <a href='delete.php?no_layanan="<?php echo $data['no_layanan']?>"'>HAPUS</a>
            </td>
            </tr>
        </div>
            <?php } ?>
    </table>
</body>
</html>