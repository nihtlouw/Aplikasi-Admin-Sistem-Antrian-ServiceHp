<?php
include "koneksidb.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Perbarui status pembayaran ke "Done"
    $sql = "UPDATE service_table SET status = 1 WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Status pembayaran berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Menutup koneksi basis data
mysqli_close($conn);
?>