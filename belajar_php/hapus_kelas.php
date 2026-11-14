<?php
include "koneksi.php";
$kode_kelas = $_GET['kode_kelas'];
$query      = mysqli_query($koneksi, "DELETE FROM kelas WHERE kode_kelas='$kode_kelas'");

if ($query) {
    header("Location: kelas.php");
    exit;
} else {
    echo "Gagal menghapus data!";
}
?>