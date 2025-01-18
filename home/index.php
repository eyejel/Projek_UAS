<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saung Kinanti</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Memuat Bootstrap CSS untuk desain yang responsif -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Memuat Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Memuat Plus Jakarta Sans Font -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- logo Website -->
    <link href="../img/latar foto.jpg" rel="icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Nama brand atau logo -->
            <a class="navbar-brand" href="#">Saung Kinanti</a>
            <!-- Tombol toggle untuk tampilan kecil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu navigasi -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Header -->
    <header class="bg-dark text-white text-center d-flex align-items-center justify-content-center" id="home" style="background-image: url('../img/latar foto.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
    <h1 class="display-4 fw-bold" style="font-family: 'Poppins', sans-serif; font-size: 4rem; color: #ffcc00; text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.7);  margin: 0;">Wilujeng Sumping Di Saung Kinanti</h1>
</header>


  <!-- Bagian About -->
  <section id="about" class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Kolom Gambar -->
            <div class="col-md-6 text-center mb-4">
                <img src="../img/depan.jpg"alt="Saung Kinanti" class="img-fluid rounded shadow" style="max-width: 100%; max-height: 300px;">
            </div>
            <!-- Kolom Teks -->
            <div class="col-md-6">
                <h2 class="text-center text-md-start">Tentang Restoran </h2>
                <p class="mt-4" style="font-size: 1.2rem; line-height: 1.8; text-align: justify; color: #ffff;">
                    Saung Kinanti adalah destinasi kuliner unik yang menawarkan suasana nyaman dengan sentuhan tradisional khas Indonesia. 
                    Kami menghadirkan kelezatan kuliner Sunda yang autentik, mulai dari Nasi Liwet hingga Karedok, semuanya disajikan dengan 
                    bahan-bahan segar dan resep asli yang diwariskan dari generasi ke generasi.
                </p>
                <p class="mt-3" style="font-size: 1.1rem; line-height: 1.8; color: #ffff;">
                    Dikelilingi oleh suasana asri dan alami, Saung Kinanti adalah tempat sempurna untuk berkumpul bersama keluarga, 
                    menikmati makan malam romantis, atau sekadar bersantai di akhir pekan. Dengan layanan ramah dan masakan berkualitas, 
                    kami berkomitmen untuk memberikan pengalaman kuliner terbaik untuk Anda.
                </p>
                <a href="#restaurants" class="btn btn-success mt-4 px-5 py-2" style="border-radius: 50px; font-weight: bold;">Lihat Menu</a>
            </div>
        </div>
    </div>
</section>

        <!-- Bagian Menu -->
        <section id="restaurants" class="mt-5">
            <h2 class="text-center">Menu Makanan</h2></h2>
            <div class="row mt-4">
                <!-- Menu 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/NasiLiwet.jpg" class="card-img-top" alt="Nasi Liwet " >
                        <div class="card-body">
                            <h5 class="card-title">Nasi Liwet</h5>
                            <p class="card-text">Nasi gurih yang disajikan dengan ikan asin, sambal, dan lalapan segar.</p>
                            <a href="postingan.php" class="btn btn-primary">Berikan komentar</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/karedok1.png" class="card-img-top" alt="Karedok">
                        <div class="card-body">
                            <h5 class="card-title">Karedok</h5>
                            <p class="card-text">Salad khas Sunda dengan bumbu kacang dan sayuran segar.</p>
                            <a href="postingan.php" class="btn btn-primary">Berikan komentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/empal_gentong.jpg" class="card-img-top" alt="Empal Gentong">
                        <div class="card-body">
                            <h5 class="card-title">Empal Gentong</h5>
                            <p class="card-text">Sup daging sapi berkuah santan khas Cirebon.</p>
                            <a href="postingan.php" class="btn btn-primary">Berikan komentar</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/lontong kari.jpg" class="card-img-top" alt="Lontong Kari">
                        <div class="card-body">
                            <h5 class="card-title">Lontong Kari</h5>
                            <p class="card-text">Lontong dengan kuah kari ayam yang gurih dan kaya rasa.</p>
                            <a href="postingan.php" class="btn btn-primary">Berikan komentar</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/tutug oncom.jpg" class="card-img-top" alt="Nasi Tutug Oncom">
                        <div class="card-body">
                            <h5 class="card-title">Nasi Tutug Oncom</h5>
                            <p class="card-text">Nasi yang dicampur dengan oncom bakar, khas Sunda.</p>
                            <a href="postingan.php" class="btn btn-primary">Berikan komentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/ayam bakar.jpg" class="card-img-top" alt="Ayam Bakar">
                        <div class="card-body">
                            <h5 class="card-title">Ayam Bakar</h5>
                            <p class="card-text">Ayam bakar dengan bumbu kecap dengan cita rasa manis dan khas Sunda.</p>
                            <a href="postingan.php" class="btn btn-primary">Berikan komentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/sate maranggi.jpg" class="card-img-top" alt="Sate Maranggi">
                        <div class="card-body">
                            <h5 class="card-title">Sate Maranggi</h5>
                            <p class="card-text">Sate daging sapi dengan bumbu khas dan sambal oncom.</p>
                            <a href="postingan.php" class="btn btn-primary">Berikan komentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/pisang goreng.jpg" class="card-img-top" alt="Pisang Goreng">
                        <div class="card-body">
                            <h5 class="card-title">Pisang Goreng</h5>
                            <p class="card-text">Pisang goreng renyah yang disajikan dengan gula merah cair.</p>
                            <a href="postingan.php" class="btn btn-primary">Berikan komentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../img/asinan bogor.jpg" class="card-img-top" alt="Asinan Bogor">
                        <div class="card-body">
                            <h5 class="card-title">Asinan Bogor</h5>
                            <p class="card-text">Sayuran segar dengan kuah asam manis pedas khas Bogor.</p>
                            <a href="postingan.php" class="btn btn-primary">Berikan komentar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   <!-- Bagian Contact Person -->
<section id="contact" class="mt-5">
    <h2 class="text-center">Contact Person</h2>
    <p class="text-center">Jika Anda memiliki pertanyaan, masukan, atau kritik, jangan ragu untuk menghubungi kami melalui salah satu kontak di bawah ini.</p>
    <div class="row justify-content-center mt-4">

        <!-- Kontak 1 -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adrian Maulana</h5>
                    <p class="card-text"><strong>Email:</strong> namaadrianmaulana@gmail.com</p>
                    <p class="card-text"><strong>Phone:</strong> +62 897 9631 826</p>
                    <p class="card-text"><strong>Social Media:<a class ="bi bi-instagram"></a>
                    <span>sir_eyezel</span>
                    </i>
                    </strong> 
                 </strong> 
                    </p>
                </div>
            </div>
        </div>
        <!-- Kontak 2 -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Riezkya Adzani Permadi</h5>
                    <p class="card-text"><strong>Email:</strong> Riezkyakiki@gmail.com</p>
                    <p class="card-text"><strong>Phone:</strong> +62 987 654 3210</p>
                    <p class="card-text"><strong>Social Media: <a class="bi bi-instagram"></a>
                    <span>riezkyadazani</span>
                    </i>
                    </strong> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <footer class="bg-dark text-white text-center py-1 mt-5">
    <p>&copy; 2025 Saung Kinanti. All rights reserved.</p>
</footer>
    <!-- Bootstrap JS untuk interaktivitas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>