<?php
include "connection.php"; // File koneksi ke database
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['isLoggedIn'])) {
    header("Location: login.php");
    exit();
}

// Pastikan data yang dibutuhkan tersedia
if (isset($_POST['id'], $_POST['tahun'], $_POST['judul'])) {
    $id = $_POST['id'];
    $tahun = $_POST['tahun'];
    $judul = $_POST['judul'];

    try {
        // Siapkan query SQL untuk update data
        $query = "UPDATE buku 
                SET judul = ?, tahun = ?, updated_by = ?, updated_at = ? 
                WHERE id = ?";

        $dbh = $koneksi->prepare($query);

        
        // Eksekusi query dengan parameter
        $dbh->execute([
            $judul, 
            $tahun, 
            $_SESSION['userid'], 
            date("Y-m-d H:i:s"), 
            $id
        ]);

        // Redirect setelah update berhasil
        header("Location: home_input.php");
        exit();
    } catch (PDOException $e) {
        // Tampilkan error jika terjadi masalah
        echo "Error: " . $e->getMessage();
    }
} else {
    // Redirect jika input tidak valid
    header("Location: home_input.php");
    exit();
}
?>
