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


<?php
    $dbh = $koneksi->query("SELECT * FROM buku WHERE isdel = 0");
    $bukus = $dbh->fetch(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="style.css">
<header>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?></h1>
</header>

<br>

<div class="button-container" align="center">
    <a href="input.php" class="add-button">Tambah Data</a>
</div>

<table>
    <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Judul</th>
        <th rowspan="2">Tahun Terbit</th>
        <th colspan="2">Aksi</th>
    </tr>
    <tr>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>

    <?php
    $no = 1;
    while($bukus = $dbh->fetch(PDO::FETCH_ASSOC)) {
    ?>

    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo htmlspecialchars($bukus['judul']); ?></td>
        <td><?php echo $bukus['tahun']; ?></td>
        <td><a href="edit.php?id=<?php echo $bukus['id']; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $bukus['id']; ?>">Hapus</a></td>
    </tr>

    <?php
    $no++;
    }
    ?>

</table>