<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal</title>
</head>
<body>
    <h2>Form Tambah Jadwal</h2>
    <form action="" method="POST">
        <label>NIM</label><br>
        <input type="text" name="nim" required><br><br>
        <label>Kode Kelas</label><br>
        <input type="text" name="kode_kelas" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
        <a href="jadwal.php">Batal</a>
    </form>
</body>
</html>
<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    $nim        = $_POST['nim'];
    $kode_kelas = $_POST['kode_kelas'];

    $query = mysqli_query($koneksi, "INSERT INTO jadwal (nim, kode_kelas) VALUES ('$nim', '$kode_kelas')");
    if ($query) {
        header("Location: jadwal.php");
        exit;
    } else {
        echo "Gagal menambah jadwal!";
    }
}
?>