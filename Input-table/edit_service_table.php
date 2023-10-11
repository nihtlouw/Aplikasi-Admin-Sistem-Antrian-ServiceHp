<html>
<head>
    <title>Edit Service HP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-3">Edit Service HP</h2>

        <?php
        include "koneksidb.php";
        // Mengambil id dari parameter URL
        $id = $_GET['id'];

        // Menampilkan data layanan yang akan diedit
        $sql = "SELECT * FROM service_table WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Menyimpan data layanan yang telah diupdate
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $no = $_POST["nomor"];
                $nama = $_POST["nama"];
                $merek = $_POST["merek"];
                $tipe = $_POST["tipe"];
                $masalah = $_POST["masalah"];
                $biaya = $_POST["biaya"];
                $tanggal = $_POST["tanggal"];

                // Memperbarui data layanan di database
                $sql = "UPDATE service_table SET nomor='$no', nama='$nama', merek='$merek', tipe='$tipe', masalah='$masalah', biaya='$biaya', tanggal='$tanggal' WHERE id=$id";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>
                            alert('Data berhasil diupdate!')
                            window.location.href = 'input_service_table.php';
                            </script>";
                } else {
                    echo "<script>
                                alert('Data gagal diupdate!')
                                window.location.href = 'input_service_table.php';
                            </script>";
                }
            }
        } else {
            echo "Data tidak ditemukan.";
        }

        // Menutup koneksi ke database
        mysqli_close($conn);
        ?>

        <br>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">No:</label>
                <input type="text" class="form-control" name="nomor" value="<?php echo $row['nomor']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Pelanggan:</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Merek HP:</label>
                <input type="text" class="form-control" name="merek" value="<?php echo $row['merek']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipe HP:</label>
                <input type="text" class="form-control" name="tipe" value="<?php echo $row['tipe']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Masalah HP:</label>
                <input type="text" class="form-control" name="masalah" value="<?php echo $row['masalah']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Total Biaya:</label>
                <input type="text" class="form-control" name="biaya" value="<?php echo $row['biaya']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal:</label>
                <input type="date" class="form-control" name="tanggal" value="<?php echo $row['tanggal']; ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
</body>
</html>

