<?php
session_start();

// Cek apakah pengguna sudah login, jika ya, alihkan ke halaman lain
if (isset($_SESSION['username'])) {
    header("Location: ../Antrian-sistem/index.php");
    exit();
}

// Cek apakah form login telah dikirimkan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa informasi login yang dikirimkan
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan validasi login, misalnya dengan memeriksa kecocokan dengan data yang tersimpan dalam basis data
    if ($username === 'pengguna' && $password === 'sandi') {
        // Login berhasil, simpan informasi ke sesi
        $_SESSION['username'] = $username;

        // Alihkan pengguna ke halaman dashboard 
        header("Location: ../Antrian-sistem/index.php");
        exit();
    } else {
        // Login gagal, tampilkan pesan kesalahan
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #17a2b8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
        }

        .container h2 {
            text-align: center;
            color: #00ced1;
        }

        .container p {
            margin-top: 20px;
            color: #999;
        }

        .container form label {
            display: block;
            margin-bottom: 8px;
            color: #777;
        }

        .container form input[type="text"],
        .container form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            transition: border-color 0.3s ease;
        }

        .container form input[type="text"]:focus,
        .container form input[type="password"]:focus {
            border-color: #aaa;
            outline: none;
        }

        .container form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            background-color: #00ced1;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .container form input[type="submit"]:hover {
            background-color: #00a5a7;
        }

        /* Footer Styles */
        .footer {
            background-color: #003e3f;
            padding: 20px;
            color: #fff;
            text-align: center;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Service Hp</h2>

        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        <form method="POST" action="index.php">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
    <div class="footer">
        &copy; <?php echo date('Y'); ?> Admin Service Hp. All rights reserved.
    </div>
</body>
</html>
