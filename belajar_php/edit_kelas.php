<?php
include "koneksi.php";
$kode_kelas = $_GET['kode_kelas'];
$data       = mysqli_query($koneksi, "SELECT * FROM kelas WHERE kode_kelas='$kode_kelas'");
$row        = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Kelas</title>
</head>
<body>
    <h2>Edit Kelas</h2>
    <form action="" method="POST">
        <label>Kode Kelas (tidak bisa diubah)</label><br>
        <input type="text" value="<?= $row['kode_kelas'] ?>" disabled><br><br>
        <label>Mata Kuliah</label><br>
        <input type="text" name="matakuliah" value="<?= $row['matakuliah'] ?>" required><br><br>
        <label>SKS</label><br>
        <input type="number" name="sks" value="<?= $row['sks'] ?>" required><br><br>
        <button type="submit" name="update">Update</button>
        <a href="kelas.php">Batal</a>
    </form>
</body>
</html>
<?php
if (isset($_POST['update'])) {
    $matakuliah = $_POST['matakuliah'];
    $sks        = $_POST['sks'];

    $update = mysqli_query($koneksi, "UPDATE kelas SET matakuliah='$matakuliah', sks='$sks' WHERE kode_kelas='$kode_kelas'");
    if ($update) {
        header("Location: kelas.php");
        exit;
    } else {
        echo "Gagal update data!";
    }
}
?>