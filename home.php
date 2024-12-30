<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: login.php"); 
    exit();
}

$username = $_SESSION['username'];
$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : "Unknown";

include "connection.php";
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Selamat Datang</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<div class="container">
        <header>
            <h1>Selamat Datang, <?php echo htmlspecialchars($username); ?>!</h1>
        </header>

        <nav>
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

        <section>
            <p>Halo, <?php echo htmlspecialchars($username); ?>! (ID: <?php echo $userid; ?>)</p>
            <p>Ini adalah halaman utama setelah login. Anda bisa mengakses halaman lain melalui menu di atas.</p>
        </section>

        <footer>
            <p>&copy; 2024 Aplikasi Anda. <a href="terms.php">Syarat & Ketentuan</a></p>
        </footer>
    </div>
</body>
</html>