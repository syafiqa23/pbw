<?php
include "connection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    $e = $_POST['email'];
    $p = $_POST['password'];

    $dbh = $koneksi->query("SELECT * FROM users WHERE email = '$e' AND active = 1");

    if ($dbh->rowCount() == 1) {
        $users = $dbh->fetch(PDO::FETCH_ASSOC);

        if (password_verify($p, $users['password'])) {
            session_start();
            $_SESSION['username'] = $users['username'];
            $_SESSION['userid'] = $users['id']; 
            $_SESSION['isLoggedIn'] = true;

            header("Location: home.php");
            exit();
        } else {
            echo "Email atau password salah.";
        }
    } else {
        echo "User tidak ditemukan.";
    }
} else {
    echo "Email atau password belum diisi.";
}
?>
