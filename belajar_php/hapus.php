<?php
include "koneksi.php";
$nim   = $_GET['nim'];
$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'");

if ($query) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal menghapus data!";
}
?>