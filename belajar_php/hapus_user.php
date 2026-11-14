<?php
include "koneksi.php";
$id_user = $_GET['id_user'];
$query   = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_user'");

if ($query) {
    header("Location: user.php");
    exit;
} else {
    echo "Gagal menghapus user!";
}
?>