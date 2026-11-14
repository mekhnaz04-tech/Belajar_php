<?php
include "koneksi.php";
$nim  = $_GET['nim'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");
$row  = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <form action="" method="POST">
        <label>NIM (tidak bisa diubah)</label><br>
        <input type="text" value="<?= $row['nim'] ?>" disabled><br><br>
        <label>Nama Lengkap</label><br>
        <input type="text" name="nama_lengkap" value="<?= $row['nama_lengkap'] ?>" required><br><br>
        <label>Jurusan</label><br>
        <input type="text" name="jurusan" value="<?= $row['jurusan'] ?>" required><br><br>
        <button type="submit" name="update">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
<?php
if (isset($_POST['update'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $jurusan      = $_POST['jurusan'];

    $update = mysqli_query($koneksi, "UPDATE mahasiswa SET nama_lengkap='$nama_lengkap', jurusan='$jurusan' WHERE nim='$nim'");
    if ($update) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal update data! Penyebab: " . mysqli_error($koneksi);
    }
}
?>