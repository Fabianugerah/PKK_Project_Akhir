<?php
include 'koneksi.php';

$query = "SELECT * FROM barang";
$result = $conn->query($query);

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
    <title>Daftar Mobil</title>
    <style>
    * {
        font-family: "Poppins", sans-serif;
        font-style: normal;
    }

    .custom-hr {
        width: 35%;
        border: 2px solid #000000;
        margin: 20px auto;
        border-radius: 50px;
    }

    body {
        margin: 0;
        padding: 0;
    }

    .luxev-logo {
        position: absolute;
        top: -12%;
        left: 38%;
        transform: rotate(-90deg) translate(-50%, -50%);
        transform-origin: center;
        font-size: 9rem;
        font-weight: bold;
        color: #fff;
    }

    .Foto1 {
        position: absolute;
        width: 60%;
        top: -2%;
        left: 2.2%;
        z-index: 9;
    }

    .Foto {
        width: 60%;
    }

    .lead {
        font-size: 24px;
        font-weight: 450;
    }

    .footer-title {
        color: #ffc107;
    }

    .footer-link:hover {
        color: #fff;
        text-decoration: none;
    }

    .navbar {
        background-color: #111;
        /* Navbar background hitam */
    }

    .navbar-brand img {
        height: 24px;
        /* Tinggi logo */
    }

    .navbar-nav .nav-link {
        color: #fff;
        /* Warna teks putih */
        font-size: 16px;
    }

    .navbar-nav .nav-link:hover {
        color: #f4c10f;
        /* Warna hover kuning */
    }

    .icon-container {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .icon-container i {
        color: #fff;
        font-size: 20px;
    }

    .icon-container i:hover {
        color: #f4c10f;
        /* Warna hover kuning */
    }
    </style>

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
        <h2 class="text-center mt-3 fw-bold">Daftar Mobil</h2>
        <hr class="custom-hr mb-4">
        <a href="tambah.php" class="btn btn-outline-primary mb-3"><i class="bi bi-plus-circle"> Tambah</i></a>
        <table class="table table-striped table-bordered shadow-lg text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Gambar</th>
                    <th>Nama Mobil</th>
                    <th>Edisi</th>
                    <th>Harga</th>
                    <th>Harga Diskon</th>
                    <th>Tanggal Input</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><img src="<?= $row['gambar']; ?>" alt="Gambar" style="width: 100px; border-radius: 5%;"></td>
                    <td><?= $row['nama_mobil']; ?></td>
                    <td><?= $row['edisi']; ?></td>
                    <td><?= 'Rp ' . number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td><?= 'Rp ' . number_format($row['harga_diskon'], 0, ',', '.'); ?></td>
                    <td><?= $row['tanggal_input']; ?></td>
                    <td>
                        <!-- Tombol Edit -->
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                            data-bs-target="#editModal<?= $row['id']; ?>">Edit</button>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal<?= $row['id']; ?>" tabindex="-1"
                            aria-labelledby="editModalLabel<?= $row['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bolder" id="editModalLabel<?= $row['id']; ?>">
                                            Konfirmasi Edit
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin mengedit data ini?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Hapus -->
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteModal<?= $row['id']; ?>">Hapus</button>

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="deleteModal<?= $row['id']; ?>" tabindex="-1"
                            aria-labelledby="deleteModalLabel<?= $row['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bolder" id="deleteModalLabel<?= $row['id']; ?>">
                                            Konfirmasi Hapus
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus data ini?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger">Hapus</a>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>