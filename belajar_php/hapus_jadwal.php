<?php
include "koneksi.php";
$id    = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM jadwal WHERE id='$id'");

if ($query) {
    header("Location: jadwal.php");
    exit;
} else {
    echo "Gagal menghapus jadwal!";
}
?>