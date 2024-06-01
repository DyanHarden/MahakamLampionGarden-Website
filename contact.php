<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/style.css" />
  <title>MLG - Kontak dan Alamat</title>

  <!-- Favicons -->
  <link href="image/favicon-16x16.png" rel="icon" />
  <link href="image/apple-touch-icon.png" rel="apple-touch-icon" />

  <style>
    iframe {
      border: 0;
    }
  </style>
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
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  HALAMAN
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="blog.php">ARTIKEL</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php">KONTAK</a>
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
          <h2 class="font-2 text-white fw-bold">Kontak dan Alamat</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item font-1 fw-bold"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active font-1 fw-bold" aria-current="page">
                Kontak
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="r-container">
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col">
            <div class="d-flex flex-column gap-3 pe-lg-5">
              <h5 class="accent-color lh-1 ls-2 fw-bold font-1">KONTAK</h5>
              <h4 class="font-2 lh-1 fw-bold">KRITIK DAN SARAN</h4>
              <p>
                Kami sangat menghargai setiap masukan dari Anda! Jika Anda memiliki kritik atau saran untuk Mahakam Lampion Garden, jangan ragu untuk mengirimkan pesan kepada kami. Suara Anda sangat berarti untuk membuat pengalaman di sini menjadi lebih baik. Terima kasih!
              </p>
              <div class="row row-cols-1 row-cols-lg-2">
                <div class="col mb-3">
                  <div class="d-flex align-items-center gap-3">
                    <i class="fa-solid fa-phone accent-color"></i>
                    +628-124-963-4164
                  </div>
                </div>
                <div class="col mb-3">
                  <div class="d-flex align-items-center gap-3">
                    <i class="fa-solid fa-location-dot accent-color"></i>
                    Jl. Slamet Riyadi No.75, Samarinda
                  </div>
                </div>
                <div class="col mb-3">
                  <div class="d-flex align-items-center gap-3">
                    <i class="fa-solid fa-envelope accent-color"></i>
                    mlgsamarinda@gmail.com
                  </div>
                </div>
                <div class="col mb-3">
                  <div class="d-flex align-items-center gap-3">
                    <i class="fa-solid fa-user accent-color"></i>
                    @mahakamlampiongarden
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="h-100 d-flex flex-column">
              <div class="success_msg toast align-items-center w-100 shadow-none mb-3 bg-transparent border border-success rounded-0 my-4" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex p-2">
                  <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                    <i class="fa-solid fa-check f-36 text-success"></i>
                    Your Message Successfully Send.
                  </div>
                  <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success" data-bs-dismiss="toast" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
              </div>
              <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 bg-transparent my-4 border rounded-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex p-2">
                  <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                    <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                    Something Wrong ! Send Form Failed.
                  </div>
                  <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger" data-bs-dismiss="toast" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
              </div>
              <form class="d-flex flex-column w-100 needs-validation mb-3 form" novalidate>
                <div class="row row-cols-1 row-cols-lg-2 mb-3">
                  <div class="col mb-3">
                    <input type="text" class="form-control p-3" name="first_name" id="first_name" placeholder="First Name" required />
                    <div class="invalid-feedback">The field is required.</div>
                  </div>
                  <div class="col mb-3">
                    <input type="text" class="form-control p-3" name="last_name" id="last_name" placeholder="Last Name" required />
                    <div class="invalid-feedback">The field is required.</div>
                  </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 mb-3">
                  <div class="col mb-3">
                    <input type="email" class="form-control p-3" name="email" id="email" placeholder="Email" required />
                    <div class="invalid-feedback">The field is required.</div>
                  </div>
                  <div class="col mb-3">
                    <input type="text" class="form-control p-3" name="subject" id="subject" placeholder="Subject" required />
                    <div class="invalid-feedback">The field is required.</div>
                  </div>
                </div>
                <div class="mb-3">
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="">
                  <button type="submit" class="btn button rounded-0 button-outline accent-color fw-bold submit_form font-1 py-3">
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="d-flex justify-content-center align-items-center" style="height: 90vh;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6623972613565!2d117.1170443749647!3d-0.5065445994884918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67e515caedd69%3A0x16d76b50635d8490!2sMahakam%20Lampion%20Garden!5e0!3m2!1sid!2sid!4v1716889719561!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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