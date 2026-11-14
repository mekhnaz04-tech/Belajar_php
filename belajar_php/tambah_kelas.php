<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kelas</title>
</head>
<body>
    <h2>Form Tambah Kelas</h2>
    <form action="" method="POST">
        <label>Kode Kelas</label><br>
        <input type="text" name="kode_kelas" required><br><br>
        <label>Mata Kuliah</label><br>
        <input type="text" name="matakuliah" required><br><br>
        <label>SKS</label><br>
        <input type="number" name="sks" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
        <a href="kelas.php">Batal</a>
    </form>
</body>
</html>
<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    $kode_kelas = $_POST['kode_kelas'];
    $matakuliah = $_POST['matakuliah'];
    $sks        = $_POST['sks'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas (kode_kelas, matakuliah, sks) VALUES ('$kode_kelas', '$matakuliah', '$sks')");
    if ($query) {
        header("Location: kelas.php");
        exit;
    } else {
        echo "Gagal menambah data!";
    }
}
?>