<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM user");
$no = 1;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
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
    <h2>DATA USER</h2>
    <a href="tambah_user.php">+ Tambah User</a>
    <br><br>
    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>ID User</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($query as $data) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $data['id_user'] ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['role'] ?></td>
            <td>
                <a href="edit_user.php?id_user=<?= $data['id_user'] ?>">Edit</a> |
                <a href="hapus_user.php?id_user=<?= $data['id_user'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php $no++; } ?>
    </table>
</body>
</html>