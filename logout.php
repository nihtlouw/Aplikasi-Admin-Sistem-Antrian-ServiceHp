<?php
session_start();

// Hapus semua data sesi
session_unset();
session_destroy();

// Alihkan pengguna kembali ke halaman login
header("Location: index.php");
exit();
?>