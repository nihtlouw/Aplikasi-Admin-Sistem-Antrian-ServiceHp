<html>
<head>
    <!-- Title -->
  <title>Antri Service HP</title>

  <!-- icon -->
  <link rel="shortcut icon" href="../img/ash.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    
    <!-- link back to menu -->
    <a href="../Antrian-sistem/index.php" class="btn btn-square btn-turquoise btn-medium"><i class="fas fa-arrow-left"></i></a>

    <div class="container">
        <h2>Fixed Table Payments</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Pelanggan</th>
                    <th>Total Biaya</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksidb.php";
                
                // Berfungsi untuk memperbarui status pembayaran ke "Done"
                function markAsDone($paymentId) {
                    global $conn;
                    $sql = "UPDATE service_table SET status =  WHERE id = $paymentId";
                    if (mysqli_query($conn, $sql)) {
                        // Delete the payment from the database
                        $deleteSql = "DELETE FROM service_table WHERE id = $paymentId";
                        if (mysqli_query($conn, $deleteSql)) {
                            echo "Pembayaran berhasil dihapus.";
                        } else {
                            echo "Error: " . $deleteSql . "<br>" . mysqli_error($conn);
                        }
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
                
                // Mengambil pembayaran dari basis data
                $sql= "SELECT * FROM service_table";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $status = $row['status'] ? 'Done' : 'Not Done';
                        $statusClass = $row['status'] ? 'text-success' : 'text-danger';

                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>Rp." . $row['biaya'] . "</td>";
                        echo "<td class='" . $statusClass . "'>" . $status . "</td>";
                        echo "<td>";
                        if (!$row['status']) {
                            echo "<button class='btn btn-success' onclick='markAsDone(" . $row['id'] . ")'>Done</button>";
                        }
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No payments found.</td></tr>";
                }

                // Menutup koneksi basis data
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function markAsDone(paymentId) {
            //Kirim permintaan AJAX untuk memperbarui status pembayaran ke"Done"
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // Refresh the page after updating the payment status
                    location.reload();
                }
            };
            xhttp.open("GET", "mark_as_done.php?id=" + paymentId, true);
            xhttp.send();
        }
        
    </script>
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
