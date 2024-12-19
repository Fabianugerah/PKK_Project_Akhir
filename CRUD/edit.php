<?php
include 'koneksi.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID tidak ditemukan.");
}

$query = "SELECT * FROM barang WHERE id = $id";
$result = $conn->query($query);

if ($result->num_rows === 0) {
    die("Data tidak ditemukan.");
}

$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gambar = $_FILES['gambar']['name'] ?? $data['gambar'];
    $nama_mobil = $_POST['nama_mobil'];
    $edisi = $_POST['edisi'];
    $harga = $_POST['harga'];
    $harga_diskon = $_POST['harga_diskon'];

    if (!empty($_FILES['gambar']['tmp_name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($gambar);

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
            $gambar = $target_file;
        } else {
            $gambar = $data['gambar'];
        }
    }

    $query = "UPDATE barang SET gambar='$gambar', nama_mobil='$nama_mobil', edisi='$edisi', harga='$harga', harga_diskon='$harga_diskon' WHERE id=$id";
    if ($conn->query($query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Edit Mobil</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">
                <div>
                    <img src="../Logo.svg" alt="Logo">LuxeV
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="../luxev.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../luxev.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../luxev.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../luxev.php">Contact</a>
                    </li>
                </ul>
                <div class="icon-container">
                    <i class="bi bi-bell"></i>
                    <a href="index.php"><i class="bi bi-cart4"></i></a>
                    <a href="../daftar.php"><i class="bi bi-person"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mt-3 fw-bold">Edit Mobil</h2>
        <hr class="custom-hr mb-4">
        <form method="POST">
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $data['gambar']; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil"
                    value="<?= $data['nama_mobil']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="edisi" class="form-label">Edisi</label>
                <input type="text" class="form-control" id="edisi" name="edisi" value="<?= $data['edisi']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?= $data['harga']; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="harga_diskon" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga_diskon" name="harga_diskon"
                    value="<?= $data['harga_diskon']; ?>" required>
            </div>
            <button type="submit" class="btn btn-warning">aUpdate</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>