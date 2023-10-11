<?php
// Panggil file koneksi ke database
require_once "../config/database.php";

// Perintah SQL untuk menghapus semua data dari tabel
$query = mysqli_query($mysqli, "DELETE FROM tbl_antrian")
    or die('Ada kesalahan pada query penghapusan total: ' . mysqli_error($mysqli));

// Kirim pesan sukses ke client-side
echo "Semua data telah dihapus.";
?>
