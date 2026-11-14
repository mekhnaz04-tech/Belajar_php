<?php
include "koneksi.php";
$id   = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id='$id'");
$row  = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Jadwal</title>
</head>
<body>
    <h2>Edit Jadwal</h2>
    <form action="" method="POST">
        <label>ID (tidak bisa diubah)</label><br>
        <input type="text" value="<?= $row['id'] ?>" disabled><br><br>
        <label>NIM</label><br>
        <input type="text" name="nim" value="<?= $row['nim'] ?>" required><br><br>
        <label>Kode Kelas</label><br>
        <input type="text" name="kode_kelas" value="<?= $row['kode_kelas'] ?>" required><br><br>
        <button type="submit" name="update">Update</button>
        <a href="jadwal.php">Batal</a>
    </form>
</body>
</html>
<?php
if (isset($_POST['update'])) {
    $nim        = $_POST['nim'];
    $kode_kelas = $_POST['kode_kelas'];

    $update = mysqli_query($koneksi, "UPDATE jadwal SET nim='$nim', kode_kelas='$kode_kelas' WHERE id='$id'");
    if ($update) {
        header("Location: jadwal.php");
        exit;
    } else {
        echo "Gagal update jadwal!";
    }
}
?>