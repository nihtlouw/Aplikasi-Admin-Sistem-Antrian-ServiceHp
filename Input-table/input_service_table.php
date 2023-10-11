<html>
<head>
    <!-- Title -->
    <title>Antri Service HP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .container {
            max-width: 600px;
        }

        .btn-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #00aa9d;
        }

        .btn-medium {
            width: 60px;
            height: 60px;
        }

        .btn-turquoise {
            color: #fff;
            background-color: #00aa9d;
            border-color: #00aa9d;
        }

        .btn-turquoise:hover {
            color: #fff;
            background-color: #00a189;
            border-color: #00a491;
        }

        .btn-turquoise i {
            color: #fff;
        }
        
    </style>

</head>
<body>
    <!-- link back to menu -->
    <a href="../Antrian-sistem/index.php" class="btn btn-square btn-turquoise btn-medium"><i class="fas fa-arrow-left"></i></a>

    <div class="container">
        <h2>Table Input Service HP</h2>

        <?php
        include "koneksidb.php";
        // Menyimpan data layanan ke database
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $no = $_POST["nomor"];
            $nama = $_POST["nama"];
            $merek = $_POST["merek"];
            $tipe = $_POST["tipe"];
            $masalah = $_POST["masalah"];
            $biaya = $_POST["biaya"];
            $tanggal = $_POST["tanggal"];
            $status = $_POST["status"];

            // Memasukkan data layanan ke database
            $sql = "INSERT INTO service_table (id, nomor, nama, merek, tipe, masalah, biaya, tanggal, status) VALUES ('$id', '$no', '$nama', '$merek', '$tipe', '$masalah', '$biaya', '$tanggal', '$status')";
            if (mysqli_query($conn, $sql) === true) {
            echo "<script>
                    alert('Data berhasil disimpan!');
                    window.location.href = 'input_service_table.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Data gagal disimpan!');
                        window.location.href = 'input_service_table.php';
                        </script>";
            }
        }  
        // Menghapus data layanan dari database
        if (isset($_GET['hapus'])) {
            $hapus_id = $_GET['hapus'];
        
            // Menghapus data layanan dari tabel berdasarkan id
            $sql = "DELETE FROM service_table WHERE id = $hapus_id";
            if (mysqli_query($conn, $sql) === true) {
                echo "Data berhasil dihapus.";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        ?>

        <form method="POST">
            <div class="row mb-3">
                <div class="col">
                    <label for="id" class="form-label">ID:</label>
                    <input type="text" class="form-control form-control-sm" id="id" name="id">
                </div>
                <div class="col">
                    <label for="nomor" class="form-label">Nomor:</label>
                    <input type="text" class="form-control form-control-sm" id="nomor" name="nomor">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="nama" class="form-label">Nama Pelanggan:</label>
                    <input type="text" class="form-control form-control-sm" id="nama" name="nama">
                </div>
                <div class="col">
                    <label for="merek" class="form-label">Merek HP:</label>
                    <input type="text" class="form-control form-control-sm" id="merek" name="merek">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tipe" class="form-label">Tipe HP:</label>
                    <input type="text" class="form-control form-control-sm" id="tipe" name="tipe">
                </div>
                <div class="col">
                    <label for="masalah" class="form-label">Masalah HP:</label>
                    <input type="text" class="form-control form-control-sm" id="masalah" name="masalah">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="biaya" class="form-label">Total Biaya:</label>
                    <input type="text" class="form-control form-control-sm" id="biaya" name="biaya">
                </div>
                <div class="col">
                    <label for="tanggal" class="form-label">Tanggal:</label>
                    <input type="date" class="form-control form-control-sm" id="tanggal" name="tanggal">
                </div>
                </div>
                <div class="col">
                    <label for="status" class="form-label">Status Pembayaran:</label>
                    <input type="text" class="form-control form-control-sm" id="status" name="status">
                </div>
            </div>
            <div align="center">
            <input type="submit" class="btn btn-success btn-sm" value="Simpan">
            </div>
        </form>

        <?php
        // Menampilkan data layanan dari database
        $sql = "SELECT * FROM service_table";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table'>
                    <tr>
                        <th>ID</th>
                        <th>Nomor</th>
                        <th>Nama Pelanggan</th>
                        <th>Merek HP</th>
                        <th>Tipe HP</th>
                        <th>Masalah HP</th>
                        <th>Biaya</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nomor"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["merek"] . "</td>";
                echo "<td>" . $row["tipe"] . "</td>";
                echo "<td>" . $row["masalah"] . "</td>";
                echo "<td>" . $row["biaya"] . "</td>";
                echo "<td>" .$row["tanggal"] . "</td>";
                echo "<td>" .$row["status"] . "</td>";
                echo "<td><a href='edit_service_table.php?id=" . $row["id"] . "'>Edit</a> | <a href='?hapus=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Tidak ada data layanan.";
        }

        // Menutup koneksi ke database
        mysqli_close($conn);
        ?>
        
<!-- Footer -->
      <footer class="footer mt-auto py-4">
        <div class="container">
          <hr class="my-4">
          <!-- copyright -->
          <div class="copyright text-center mb-2 mb-md-0">
            &copy; 2023 - <a href="www.Antriservicehp.my.id" target="_blank" class="text-danger text-decoration-none">www.Antriservicehp.my.id</a>. All rights reserved.
          </div>
        </div>
      </footer>
</body>
</html>
