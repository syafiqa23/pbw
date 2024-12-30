<?php
    include "connection.php";
    session_start();

    if (!isset($_SESSION['isLoggedIn']))
    {
        header("Location: login.php"); 
    }

    $id = $_GET['id'];
    
    $dbh = $koneksi->prepare("SELECT * FROM buku WHERE id = ?");

    $dbh->execute([$id]);

    if($dbh->rowCount() == 1)
    {
        $data = $dbh->fetch(PDO::FETCH_ASSOC);
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa; /* Abu-abu muda */
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 500px;
        }
        .card {
            background-color: #fff; /* Putih */
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #ff69b4; /* Pink */
            border: none;
        }
        .btn-primary:hover {
            background-color: #ff85c1; /* Pink lebih terang */
        }
        .form-label {
            color: #6c757d; /* Abu-abu */
        }
        h3 {
            color: #ff69b4; /* Pink */
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card p-4">
            <h3>Edit Data Buku</h3>
            <form method="POST" action="aksiedit.php">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="<?php echo htmlspecialchars($data['judul']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun Terbit</label>
                    <input type="text" name="tahun" class="form-control" id="tahun" value="<?php echo htmlspecialchars($data['tahun']); ?>" required>
                </div>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
}
else {
    
        echo "<script>alert('Data tidak ditemukan')</script>";
        header("Location: home_input.php");
    }
?>