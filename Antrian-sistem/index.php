<!doctype html>
<html lang="en" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Antrian Berbasis Web">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Antri Service HP</title>
  <!-- Title -->
  <title>Aplikasi Antrian Berbasis Web</title>

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="assets/img/ash.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

  <!-- Custom Style -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Custom Sidebar Style -->
  <style>

    .navbar {
      position: absolute;
      top: 0;
      left: 0;
      background-color: transparent;
      border: none;
      border-bottom: 2px solid #40E0D0;
      z-index: 1;
    }

    .sidebar {
      background-color: #17a2b8;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      width: 200px;
      z-index: 1;
      font-family: 'Raleway', sans-serif;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
    }

    .sidebar ul li {
      margin-bottom: 10px;
    }

    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
    
    }

    .sidebar ul li a:hover {
      text-decoration: underline;
    }

    .main-content {
      margin-left: 200px;
    }

    .card-body {
      min-height: 200px;
    }

    .sidebar {
    position: relative;
    }
    
    .sidebar-header {
      display: flex;
      align-items: center;
      background-color: #17a2b8;
      padding: 10px;
      color: #fff;
      font-weight: bold;
    }
    
    .sidebar-icon {
      background-color: #fff;
      color: #17a2b8;
      border-radius: 50%;
      padding: 5px;
      margin-right: 10px;
    }
    
    .sidebar-title {
      font-size: 16px;
    }
    
    .sidebar-divider {
      border: 1px solid #fff;
      margin: 10px 0;
    }
    
    .footer {
    border-top: 4px solid #008080;
    padding-top: 10px;
    margin-top: 20px;
    }
    
    
  </style>
  
  <style>
    body {
    background-image: url("/Antrian-sistem/hp.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
  }
</style>
  
</head>

<body class="d-flex flex-column h-100">
  
  <main class="flex-shrink-0">
    <div class="container pt-5">
      <div class="row gx-5">
        <!-- Sidebar -->
        <div class="col-lg-3">
          <div class="sidebar">
            <div class="sidebar-header">
            <div class="sidebar-icon">
          <i class="bi-tools"></i>
        </div>
      <div class="sidebar-title">
        Service Handphone
      </div>
    </div>
            <ul class="list-unstyled p-4">
              <li><a  href="nomor-antrian" class="text-white">Nomor Antrian</a></li>
              <li><a href="panggilan-antrian" class="text-white">Panggilan Antrian</a></li>
              <li><a href="../Input-table/input_service_table.php" class="text-white">Input Customer Identity</a></li>
              <li><a href="../Fixed-table/fixed_service_table.php" class="text-white">Customer Transactions</a></li>
              <li><a href="../logout.php" class="text-white">Log out</a></li>
            </ul>
          </div>
        </div>

        <!-- Main content -->
        <div class="col-lg-9 mb-4">
          <div class="row">
            <!-- link halaman nomor antrian -->
            <div class="col-lg-6 mb-4">
              <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="feature-icon-1 bg-success bg-gradient mb-4">
                    <i class="bi-people"></i>
                  </div>
                  <h3>Nomor Antrian</h3>
                  <p class="mb-4">Halaman Nomor Antrian digunakan pengunjung untuk mengambil nomor antrian.</p>
                  <a href="nomor-antrian" class="btn btn-success rounded-pill px-4 py-2">
                    Tampilkan <i class="bi-chevron-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- link halaman panggilan antrian -->
            <div class="col-lg-6 mb-4">
              <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="feature-icon-1 bg-success bg-gradient mb-4">
                    <i class="bi-mic"></i>
                  </div>
                  <h3>Panggilan Antrian</h3>
                  <p class="mb-4">Halaman Panggilan Antrian digunakan petugas loket untuk memanggil antrian pengunjung.</p>
                  <a href="panggilan-antrian" class="btn btn-success rounded-pill px-4 py-2">
                    Tampilkan <i class="bi-chevron-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- link halaman input customer identity -->
            <div class="col-lg-6 mb-4">
              <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                <div class="feature-icon-1 bg-success bg-gradient mb-4">
                    <i class="bi-phone"></i>
                </div>
                  <h3>Input Customer Handphone Identity</h3>
                  <p class="mb-4">Halaman Input Customer Identity digunakan untuk menginput data handphone customer yang rusak.</p>
                  <a href="../Input-table/input_service_table.php" class="btn btn-success rounded-pill px-4 py-2">
                    Tampilkan <i class="bi-chevron-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- link halaman Fixed customer service transactions -->
            <div class="col-lg-6 mb-4">
              <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="feature-icon-1 bg-success bg-gradient mb-4">
                    <i class="bi-check2-circle"></i>
                  </div>
                  <h3>Fixed Customer Service & Transactions</h3>
                  <p class="mb-4">Halaman Customer Transactions digunakan untuk melihat transaksi customer hp yang sudah selesai diperbaiki.</p>
                  <a  href="../Fixed-table/fixed_service_table.php" class="btn btn-success rounded-pill px-4 py-2">
                    Tampilkan <i class="bi-chevron-right ms-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto py-4">
    <div class="container-fluid">
      <!-- copyright -->
      <div class="text-center">
      &copy; 2023 - <a href="www.Antriservicehp.my.id" target="_blank" class="text-danger text-decoration-none">www.Antriservicehp.my.id</a>. All rights reserved.
      </div>
    </div>
    
  </footer>
  

</body>

</html>
