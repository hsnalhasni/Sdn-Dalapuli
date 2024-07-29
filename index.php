<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sekolah</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#">
            <img src="tut.png" alt="Logo" class="navbar-logo">
            SDN 14 Dalapuli
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil Sekolah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengajar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="jumbotron hero-section" style="background-color :  #17a2b8;">
        <div class="hero-text" style="color:white">
            <h1>Selamat Datang di SDN 14 Dalapuli</h1>
            <p>Menyediakan informasi lengkap mengenai sekolah kami.</p> 
            <br><br><br><br><br><br>
            <button>Daftar</button>
        </div>
        <div class="hero-image">
            <img src="sekolah.jpg" alt="Gambar Sekolah">
        </div>
    </div>

    <!-- Berita & Pengumuman Section -->
    <div class="container" >
        <h2>Berita & Pengumuman</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="user.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Berita 1</h5>
                        <p class="card-text">Deskripsi singkat berita 1.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Tambahkan lebih banyak berita di sini -->
        </div>
    </div>

    <section id="kontak" class="contact text-center" style="padding-bottom : 20px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Kontak</h2>
                <p>SEKOLAH DASAR NEGERI 14 DALAPULI</p>
            </div>

            <div class="row">
                
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="card" >
                        <div class="address">
                            <h4>Alamat:</h4>
                            <p>Jalan Trans Sulawesi No 72 Kecamatan Kwandang Kabupaten Gorontalo Utara</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telepon / WA</h4>
                            <p>082293386121<br>085240118116 (Fiki)</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3139861313202!2d123.14612217395891!3d0.9110135990801764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327ead5f7a3157db%3A0x7edc04debae24e3d!2sSDN%202%20DALAPULI!5e0!3m2!1sid!2sid!4v1722234227222!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start" >
        <div class="container p-4">
            <h5 class="text-uppercase">Website Sekolah</h5>
            <p>Alamat sekolah dan informasi kontak.</p>
            <h5 class="text-uppercase">Tautan Berguna</h5>
            <ul class="list-unstyled mb-0" >
                <li><a href="#" class="text-dark" style="color : white">Beranda</a></li>
                <li><a href="#" class="text-dark">Layanan</a></li>
                <li><a href="#" class="text-dark">Informasi</a></li>
                <li><a href="#" class="text-dark">Pendaftaran</a></li>
                <li><a href="#" class="text-dark">Sejarah Sekolah</a></li>
                <li><a href="#" class="text-dark">Pengajar</a></li>
            </ul>
        </div>
        <div class="text-center p-3">
            © 2024 Website Sekolah Dasar Negeri 14 Dalapuli
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scroll');
            } else {
                navbar.classList.remove('navbar-scroll');
            }
        });
    </script>
</body>
</html>
