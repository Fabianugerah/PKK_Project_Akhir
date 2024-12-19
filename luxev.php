<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeV Showroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Animasi Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="about/style.css" />
    <style>
    * {

        font-family: "Poppins", sans-serif;
        font-style: normal;
    }

    body {
        color: #fff;
        margin: 0;
        padding: 0;
        background-color: #111;
        /* Background hitam */
    }

    .luxev-logo {
        position: absolute;
        top: -8%;
        left: 38%;
        transform: rotate(-90deg) translate(-50%, -50%);
        transform-origin: center;
        font-size: 9rem;
        font-weight: bold;
        color: #fff;
        filter: blur(2px);
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
        color: #B88916;
    }

    .footer-link:hover {
        color: #fff;
        text-decoration: none;
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0);
        z-index: 10;
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
        color: #B88916;
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
        color: #B88916;
        /* Warna hover kuning */
    }

    .hero-section {
        height: 100vh;
        background-image: url('about/images/background.jpg');
        /* Ganti dengan gambar Anda */
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.7);
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        color: #B88916;
        font-size: 3rem;
        font-weight: bold;
    }

    .hero-subtitle {
        font-size: 1.2rem;
    }

    /* Warna Footer */
    .font {
        color: #B88916;
    }

    /* Slide */
    /* Atur ukuran carousel lebih kecil */
    .custom-carousel {
        max-width: 100%;
        max-height: 300px;
        margin: auto;
    }

    .custom-carousel img {
        height: 300px;
        object-fit: cover;
        opacity: 70%;
    }

    /* Brand Mobil */

    .sponsor-logo {
        width: 100%;
        max-height: 80px;
        object-fit: contain;
        margin: 10px;
        opacity: 40%;
        filter: brightness(1) invert(0);
    }

    .sponsor-logo:hover {
        opacity: 80%;
        filter: brightness(1.5) invert(0);
    }


    /* Contact */

    form {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
    }

    form button.btn {
        background: #B88916;
        color: #FFFFFF;
        letter-spacing: 2px;
        border: none;
        font-weight: 500;
        font-size: 20px;
        transition: all 0.3s ease;
    }

    form button.btn:hover {
        background: #cccccc;
        color: #000000;
    }

    form input.btn {
        background: #CCCCCC;
        color: #000000;
        letter-spacing: 2px;
        border: none;
        font-weight: 500;
        font-size: 20px;
        transition: all 0.3s ease;
    }

    .custom-hr {
        width: 35%;
        border: 2px solid #fff;
        margin: 20px auto;
        border-radius: 50px;
    }

    /* Info */
    .services .card-body i {
        font-size: 60px;
    }

    #services i {
        color: #B88916;
    }

    .hr-info {
        width: 50%;
        border: 2px solid #B88916;
        margin: 10px auto;
        border-radius: 50px;
    }
    </style>
</head>

<body>
    <section id="home">
        <div class="hero-section">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand text-white fw-bold" href="#">
                        <div>
                            <img src="Logo.svg" alt="Logo">LuxeV
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#galeri">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                        <div class="icon-container">
                            <i class="bi bi-bell"></i>
                            <a href="CRUD/index.php"><i class="bi bi-cart4"></i></a>
                            <a href="daftar.php"><i class="bi bi-person"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Home -->
            <div class="hero-overlay"></div>
            <div class="container h-100 d-flex align-items-center">
                <div class="hero-content text-center mx-auto">
                    <h1 class="hero-title">LuxeV Showroom</h1>
                    <p class="hero-subtitle mt-3">
                        Inovasi yang mempertahankan keantikan dari sebuah mobil klasik, yang di mana kami menjual mobil
                        dengan gaya klasik supaya desainnya yang khas tidak hilang atau kalah dengan mobil modern pada
                        zaman
                        sekarang.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 col-lg-2">
                <img src="asset/images/logo/mercedes.png" class="sponsor-logo img-fluid" alt="Sponsor 1">
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <img src="asset/images/logo/bmw.png" class="sponsor-logo img-fluid" alt="Sponsor 2">
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <img src="asset/images/logo/volvo.png" class="sponsor-logo img-fluid" alt="Sponsor 3">
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <img src="asset/images/logo/audi.png" class="sponsor-logo img-fluid" alt="Sponsor 4">
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <img src="asset/images/logo/porsche.svg" class="sponsor-logo img-fluid" alt="Sponsor 5">
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <img src="asset/images/logo/volkswegen.svg" class="sponsor-logo img-fluid" alt="Sponsor 5">
            </div>

        </div>
    </div>

    <!-- Carousel Otomatis -->
    <div class="container mt-5">
        <div id="carouselExample" class="carousel slide custom-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/images/foto1.jpg" class="d-block w-100 rounded" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="asset/images/foto2.jpg" class="d-block w-100 rounded" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="asset/images/foto3.jpg" class="d-block w-100 rounded" alt="Slide 3">
                </div>
            </div>
        </div>
    </div>


    <!-- Halaman About -->
    <section id="about">
        <div class="container py-5">
            <div class="section-header text-center pb-4">
                <h2 class="fw-bold">Tujuan</h2>
                <hr class="custom-hr">
            </div>
            <div class="row align-items-center">
                <!-- Image -->
                <div class="col-md-6 position-relative">
                    <img src="about/images/foto.svg" alt="Classic Car" class="img-fluid rounded shadow Foto">
                    <img src="about/images/foto1.svg" alt="Classic Car" class="img-fluid rounded shadow Foto1">
                    <div class="luxev-logo">LUXEV</div>
                </div>
                <!-- Description -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <p class="lead">
                        Tujuan Perusahaan LuxeV yaitu untuk mempertahankan keantikan dari sebuah mobil klasik, yang di
                        mana
                        kami menjual mobil dengan gaya klasik supaya desainnya yang khas tidak hilang dan kalah dengan
                        mobil
                        modern pada zaman sekarang.
                    </p>
                    <p class="lead">
                        Karena pada zaman sekarang mobil klasik sudah jarang dijumpai oleh generasi berikutnya, maka
                        dari
                        itu kami mementingkan penjualan mobil klasik agar keaslian dan keantikan mobil klasik masih
                        terjaga
                        dan tidak hilang termakan oleh zaman.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Halaman Info -->
    <section id="services" class="services section-padding">
        <div class="container">
            <div class="row">
                <!-- Kotak 1 -->
                <div class="col-12 col-md-12 col-lg-4 my-4 d-flex align-items-stretch">
                    <div class="card text-white bg-dark text-center p-4 w-100">
                        <div class="card-body">
                            <i class="bi bi-award"></i>
                            <h3 class="card-title fw-bold">Premium</h3>
                            <hr class="hr-info">
                            <p class="fs-5">
                                LuxeV adalah showroom mobil klasik dengan layanan premium yang dirancang untuk memenuhi
                                kebutuhan para pecinta otomotif kelas atas. Setiap mobil di LuxeV dipilih dengan standar
                                tertinggi, mulai dari kualitas restorasi hingga keaslian komponennya.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Kotak 2 -->
                <div class="col-12 col-md-12 col-lg-4 my-4 d-flex align-items-stretch">
                    <div class="card text-white bg-dark text-center p-4 w-100">
                        <div class="card-body">
                            <i class="bi bi-gem"></i>
                            <h3 class="card-title fw-bold">Eksklusif</h3>
                            <hr class="hr-info">
                            <p class="fs-5">
                                LuxeV menghadirkan koleksi mobil klasik yang eksklusif dan langka, menjadikannya tujuan
                                utama bagi para kolektor. Setiap kendaraan yang ditawarkan memiliki cerita unik dan
                                nilai sejarah tinggi, mulai dari mobil antik era awal abad ke-20 hingga ikon otomotif
                                yang legendaris. 
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Kotak 3 -->
                <div class="col-12 col-md-12 col-lg-4 my-4 d-flex align-items-stretch">
                    <div class="card text-white bg-dark text-center p-4 w-100">
                        <div class="card-body">
                            <i class="bi bi-feather"></i>
                            <h3 class="card-title fw-bold">Elegan</h3>
                            <hr class="hr-info">
                            <p class="fs-5">
                                Showroom LuxeV dirancang dengan nuansa elegan yang mencerminkan keanggunan era mobil
                                klasik. Interiornya memadukan estetika vintage dan modern, dengan pencahayaan hangat
                                yang menyoroti setiap detail kendaraan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Halaman Galeri -->
    <section id="galeri">
        <div class="container-fluid">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="about/images/gambar1.jpg" />
                        <p>Merchendes Bend</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="about/images/gambar2.jpeg" />
                        <p>Volvo</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="about/images/gambar3.jpeg" />
                        <p>Audi</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="about/images/gambar4.jpeg" />
                        <p>BMW</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="about/images/gambar5.jpeg" />
                        <p>Porsche</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="about/images/gambar6.jpeg" />
                        <p>Volkswegen</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="about/images/gambar7.jpeg" />
                        <p>Mustanc</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="about/images/gambar8.jpeg" />
                        <p>Chevrolet</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="about/images/gambar9.jpeg" />
                        <p></p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Halaman Contact -->
    <section id="contact" class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center mt-4">
                        <h2 class="fw-bold">Hubungi Kami</h2>
                        <hr class="custom-hr">
                        <p>Hubungi kami apabila ada kendala atau pertanyaan yang ingin ditanyakan.</p>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
                    <form action="#" name="formku" onsubmit="return validasi()" class="text-light p-4 m-auto">
                        <div class="row">
                            <!-- Nama -->
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" name="teks" id="teks" class="form-control" required
                                        placeholder="Masukkan nama..." />
                                </div>
                            </div>
                            <!-- Email -->
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        placeholder="Masukkan email..." />
                                </div>
                            </div>
                            <!-- Pesan -->
                            <label for="exampleFormControlInput1" class="form-label">Pertanyaan</label>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea rows="3" required class="form-control"
                                        placeholder="Ketikkan pesan..."></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block mt-2 " value="Kirim" onclick="validasi()">
                                Kirim
                            </button>
                            <input type="reset" class="btn btn-block mt-2" name="reset" value="Reset">
                            </input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Halaman Footer -->
    <footer id="footer" class="bg-dark text-white pt-5 gb-4">
        <div class="container text-md-left">
            <div class="row  text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold font">
                        LuxeV Showroom
                    </h5>
                    <p>
                        LuxeV Showroom menyediakan mobil klasik dengan kualitas dan harga yang terjangkau.
                    </p>
                </div>

                <!-- Produk -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold font">
                        Produk
                    </h5>
                    <p>
                        <a href="#" class="text-white text-decoration-none">BMW</a>
                    </p>
                    <p>
                        <a href="#" class="text-white text-decoration-none">Porsche</a>
                    </p>
                    <p>
                        <a href="#" class="text-white text-decoration-none">Merchendes Bend</a>
                    </p>
                    <p>
                        <a href="#" class="text-white text-decoration-none">Audi</a>
                    </p>
                </div>

                <!-- Layanan Menu -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold font">
                        Menu
                    </h5>
                    <p>
                        <a href="#home" class="text-white text-decoration-none">Home</a>
                    </p>
                    <p>
                        <a href="#about" class="text-white text-decoration-none">About</a>
                    </p>
                    <p>
                        <a href="#galeri" class="text-white text-decoration-none">Galeri</a>
                    </p>
                    <p>
                        <a href="#contact" class="text-white text-decoration-none">Contact</a>
                    </p>
                </div>

                <!-- Contact -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold font">
                        Hubungi Kami
                    </h5>
                    <p>
                        <i class="bi bi-geo-alt m-1"></i> SMKN 1 Purwosari, Pasuruan - Jawa Timur
                    </p>
                    <p><i class="bi bi-envelope m-1"></i>LuxeVshowroom@gmail.com</p>
                    <p><i class="bi bi-instagram m-1"></i>@LuxeV_Showroom</p>
                    <p><i class="bi bi-whatsapp m-1"></i>0882-1741-8481</p>
                </div>
            </div>
            <hr class="mb-4" />
            <div class="row align-items-center text-center">
                <div class="col-md-7 col-lg-8">
                    <p>
                        &copy; Copyright all right Reserved by:
                        <a href="#" style="text-decoration: none">
                            <strong class="font">LuxeV Showroom</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#footer" onclick="alert('Maaf, halaman belum tersedia!!');"
                                    class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="bi bi-github"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#footer" onclick="alert('Maaf, halaman belum tersedia!!');"
                                    class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="bi bi-discord"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#footer" onclick="alert('Maaf, halaman belum tersedia!!');"
                                    class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="bi bi-threads"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="about/app.js"></script>
</body>

</html>