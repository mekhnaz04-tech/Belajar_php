<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM kelas");
$no = 1;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Kelas</title>
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
    <h2>DATA KELAS</h2>
    <a href="tambah_kelas.php">+ Tambah Kelas</a>
    <br><br>
    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Kode Kelas</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($query as $data) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $data['kode_kelas'] ?></td>
            <td><?= $data['matakuliah'] ?></td>
            <td><?= $data['sks'] ?></td>
            <td>
                <a href="edit_kelas.php?kode_kelas=<?= $data['kode_kelas'] ?>">Edit</a> |
                <a href="hapus_kelas.php?kode_kelas=<?= $data['kode_kelas'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php $no++; } ?>
    </table>
</body>
</html>