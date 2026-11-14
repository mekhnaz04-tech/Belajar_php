<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>
    <form action="" method="POST">
        <label>NIM (Maksimal 10 karakter)</label><br>
        <input type="text" name="nim" maxlength="10" required><br><br>
        <label>Nama Lengkap</label><br>
        <input type="text" name="nama_lengkap" required><br><br>
        <label>Jurusan</label><br>
        <input type="text" name="jurusan" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    $nim          = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jurusan      = $_POST['jurusan'];

    $query = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama_lengkap, jurusan) VALUES ('$nim', '$nama_lengkap', '$jurusan')");
    
    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambah data! Penyebab: " . mysqli_error($koneksi);
    }
}
?>