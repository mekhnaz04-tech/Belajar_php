<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$no = 1;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
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
    <h2>DATA MAHASISWA</h2>
    <a href="tambah.php">+ Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($query as $data) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['jurusan'] ?></td>
            <td>
                <a href="edit.php?nim=<?= $data['nim'] ?>">Edit</a> |
                <a href="hapus.php?nim=<?= $data['nim'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php $no++; } ?>
    </table>
</body>
</html>