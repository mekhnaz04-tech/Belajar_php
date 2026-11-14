<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>
    <h2>Form Tambah User</h2>
    <form action="" method="POST">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password</label><br>
        <input type="password" name="password" required><br><br>
        <label>Nama</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Role</label><br>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="dosen">Dosen</option>
            <option value="mahasiswa">Mahasiswa</option>
        </select><br><br>
        <button type="submit" name="simpan">Simpan</button>
        <a href="user.php">Batal</a>
    </form>
</body>
</html>
<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama     = $_POST['nama'];
    $role     = $_POST['role'];

    $query = mysqli_query($koneksi, "INSERT INTO user (username, password, nama, role) VALUES ('$username', '$password', '$nama', '$role')");
    if ($query) {
        header("Location: user.php");
        exit;
    } else {
        echo "Gagal menambah user!";
    }
}
?>