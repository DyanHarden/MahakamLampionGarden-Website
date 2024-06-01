<?php
require 'koneksi.php';

$query = 'SELECT * FROM artikel';
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/style.css" />
  <title>MLG - Artikel</title>

  <!-- Favicons -->
  <link href="image/favicon-16x16.png" rel="icon" />
  <link href="image/apple-touch-icon.png" rel="apple-touch-icon" />
</head>

<body>
  <!-- Scripts -->
  <script src="js/vendor/bootstrap.bundle.min.js"></script>
  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/swiper-script.js"></script>
  <script src="js/submit-form.js"></script>
  <script src="js/vendor/isotope.pkgd.min.js"></script>
  <script src="js/video_embedded.js"></script>

  <!-- Header -->
  <section class="sticky-top py-2 bg-dark-color">
    <div class="r-container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="logo-container">
            <img src="image/LAMPION-removebg-preview.png" alt="" class="img-fluid" />
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars-staggered"></i>
          </button>
          <div class="collapse navbar-collapse pt-lg-0 pt-3" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">BERANDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">TENTANG KAMI</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GALERI
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="galeri.php">GALERI FOTO</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  HALAMAN
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item active" href="blog.php">ARTIKEL</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">KONTAK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loginadmin.php">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- End Of Header -->

  <main class="text-white">
    <!-- BANNER -->
    <section class="section position-relative">
      <div class="texture-overlay"></div>
      <div class="r-container position-relative" style="z-index: 2">
        <div class="d-flex flex-column">
          <h2 class="font-2 text-white fw-bold">ARTIKEL</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item font-1 fw-bold"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active font-1 fw-bold" aria-current="page">
                Artikel </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="r-container">
        <div class="d-flex flex-lg-row flex-column-reverse gap-3">
          <div class="col col-lg-4 pe-lg-3">
            <div class="d-flex flex-column gap-5">
              <div class="d-flex flex-column justify-content-center position-relative bg-dark-2 p-5">
                <div class="texture-overlay"></div>
                <div class="position-relative text-center" style="z-index: 2">
                  <h3 class="font-2 fw-bold lh-1">MAU RESERVASI?</h3>
                  <p>Langsung saja hubungi kami disini!</p>
                  <div>
                    <a href="contact.php" class="px-4 py-2 btn button accent-color button-outline rounded-0 fw-bold font-1">
                      KONTAK KAMI
                    </a>
                  </div>
                </div>
              </div>
              <div>
                <h5 class="fs-4 font-2 fw-bold">ARTIKEL SEPUTAR MLG!</h5>
                <p>
                  Temen-temen bisa tau informasi apa aja seputar event, kuliner, dan promo yang berlangsung di Mahakam Lampion Garden.
                </p>
              </div>
            </div>
          </div>
          <div class="col col-lg-8 h-100">
            <div class="row row-cols-1">
              <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                <div class="col mb-3">
                  <div class="card h-100 rounded-0 p-1 bg-transparent">
                    <img src="image/artikel/<?= $data['gambar'] ?>" class="card-img-top" alt="Edukasi Emisi Kendaraan" />
                    <div class="card-body shadow-sm">
                      <h5 class="card-title"><?= $data['judul']; ?></h5>
                      <a href="detailartikel.php?id=<?= $data['id_artikel'] ?>" class="btn" style="background-color: #ff934e;">Baca Selengkapnya</a>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <footer class="text-white">
    <section class="section py-5 border-top border-2">
      <div class="r-container">
        <div class="d-flex flex-column justify-content-center align-items-center text-center">
          <h5 class="font-1 mb-5 fw-bold accent-color">
            MAHAKAM LAMPION GARDEN, +62 81249634164, mlgsamarinda@gmail.com
          </h5>
          <div class="d-flex flex-row flex-wrap gap-4 justify-content-center">
            <a href="https://www.facebook.com/profile.php?id=100077074287958" class="font-2 link-social">FACEBOOK</a>
            <a href="https://www.instagram.com/mahakamlampiongarden/" class="font-2 link-social">INSTAGRAM</a>
            <a href="https://www.youtube.com/results?search_query=mahakam+lampion+garden+samarinda" class="font-2 link-social">YOUTUBE</a>
          </div>
        </div>
      </div>
    </section>
    <div class="py-3 position-relative bg-secondary-dark">
      <div class="texture-overlay"></div>
      <div class="r-container position-relative" style="z-index: 2">
        <div class="d-flex flex-lg-row flex-column text-center gap-3 justify-content-between align-items-center">
          <div class="logo-container">
            <img src="" alt="" class="img-fluid" />
          </div>
          <span> COPYRIGHT 2024 © MLG SAMARINDA MANAGEMENT | POWERED BY WISATA KALTIM </span>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/vendor/fslightbox.js"></script>
  <script src="js/masonry.js"></script>
</body>

</html>