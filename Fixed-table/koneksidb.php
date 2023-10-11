<?php

    // Konfigurasi koneksi ke database
    $hostname = "localhost";
    $userDataBase = "root";
    $passwordUser = "";
    $databaseName = "antrian_service_hp";

    // Membuat koneksi ke database
    $conn = mysqli_connect($hostname,$userDataBase,$passwordUser,$databaseName);

    // Memeriksa apakah koneksi berhasil
    if (!$conn) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }


        



?>