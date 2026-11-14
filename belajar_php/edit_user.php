<?php
include "koneksi.php";
$id_user = $_GET['id_user'];
$data    = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
$row     = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="" method="POST">
        <label>ID User (tidak bisa diubah)</label><br>
        <input type="text" value="<?= $row['id_user'] ?>" disabled><br><br>
        <label>Username</label><br>
        <input type="text" name="username" value="<?= $row['username'] ?>" required><br><br>
        <label>Password</label><br>
        <input type="text" name="password" value="<?= $row['password'] ?>" required><br><br>
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br><br>
        <label>Role</label><br>
        <select name="role">
            <option value="admin" <?= ($row['role'] == 'admin') ? 'selected' : '' ?>>Admin</option>
            <option value="dosen" <?= ($row['role'] == 'dosen') ? 'selected' : '' ?>>Dosen</option>
            <option value="mahasiswa" <?= ($row['role'] == 'mahasiswa') ? 'selected' : '' ?>>Mahasiswa</option>
        </select><br><br>
        <button type="submit" name="update">Update</button>
        <a href="user.php">Batal</a>
    </form>
</body>
</html>
<?php
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama     = $_POST['nama'];
    $role     = $_POST['role'];

    $update = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', nama='$nama', role='$role' WHERE id_user='$id_user'");
    if ($update) {
        header("Location: user.php");
        exit;
    } else {
        echo "Gagal update user!";
    }
}
?>