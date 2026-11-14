<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM jadwal");
$no = 1;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Jadwal</title>
</head>
<body>
    <p>
        <b>Menu:</b> 
        <a href="index.php">Home</a> | 
        <a href="mahasiswa.php">Mahasiswa</a> | 
        <a href="kelas.php">Kelas</a> | 
        <a href="user.php">User</a> | 
        <a href="jadwal.php">Jadwal</a>
    </p>
    <hr>
    <h2>DATA JADWAL</h2>
    <a href="tambah_jadwal.php">+ Tambah Jadwal</a>
    <br><br>
    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>NIM</th>
            <th>Kode Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($query as $data) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $data['id'] ?></td>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['kode_kelas'] ?></td>
            <td>
                <a href="edit_jadwal.php?id=<?= $data['id'] ?>">Edit</a> |
                <a href="hapus_jadwal.php?id=<?= $data['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php $no++; } ?>
    </table>
</body>
</html>