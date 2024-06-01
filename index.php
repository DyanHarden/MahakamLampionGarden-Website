<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/style.css" />
  <title>Lampion Garden Samarinda - Homepage</title>

  <!-- Favicons -->
  <link href="image/favicon-16x16.png" rel="icon" />
  <link href="image/apple-touch-icon.png" rel="apple-touch-icon" />

  <style>
    .image-container {
      width: 100%;
      overflow: hidden;
      margin-bottom: 15px;
    }

    .image-container img {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 8px;
      /* Adding rounded corners */
    }

    .shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
                <a class="nav-link active" aria-current="page" href="index.php">BERANDA</a>
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
    <section class="section position-relative" style="background-image: url(image/PXL_20240523_183040420.jpg); height: 90vh">
      <div class="image-overlay"></div>
      <div class="r-container position-relative w-100 h-100" style="z-index: 2">
        <div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
          <h5 class="font-1 fs-3 ls-2 fw-bold shadow-sm">MAHAKAM LAMPION GARDEN SAMARINDA</h5>
          <h1 class="font-2 lh-1 fw-bold">
            WISATA<br />
            & <br />
            <span class="accent-color"> KULINER </span>
          </h1>
          <p class="mx-auto" style="max-width: 768px">
            Mahakam Lampion Garden Selalu Menemani Teman MLG Dengan Segudang Fasilitasnya yang Keren Abis
          </p>
        </div>
      </div>
    </section>

    <section class="section position-relative" style="margin-top: -150px">
      <div class="r-container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
          <div class="col">
            <div class="d-flex h-100 align-items-center p-4">
              <img src="image/Kaltim-color- mini.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col">
            <div class="d-flex h-100 align-items-center p-4">
              <img src="image/LAMPION-removebg-preview.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col">
            <div class="d-flex h-100 align-items-center p-4">
              <img src="image/wonindo-removebg-preview.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col">
            <div class="d-flex flex-column p-5 bg-accent-color">
              <h5 class="font-2 fw-bold">WE ARE THE BEST PLACE IN TOWN</h5>
              <p>Untuk bersantai dan berkuliner bersama yang tersayang.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CINESTER STUDIO -->
    <section class="section">
      <div class="r-container">
        <div class="d-flex flex-column gap-5">
          <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
              <h5 class="accent-color lh-1 ls-2 fw-bold font-1">MAHAKAM LAMPION GARDEN</h5>
              <h3 class="font-2 lh-1 fw-bold">BUTUH TEMPAT SWAFOTO DAN KULINER ?</h3>
            </div>
            <div class="col d-flex align-items-center">
            </div>
          </div>
          <div class="row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-7 mb-3">
              <div class="shadow d-flex justify-content-center align-items-center video-container">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/IMXVtVXXNtA?autoplay=1&mute=1&controls=1" title="Video Embedded" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
              </div>
            </div>
            <div class="col col-lg-5 mb-3 mt-5">
              <div class="d-flex flex-column ps-lg-4">
                <p class="mt-5">
                  Mahakam Lampion Garden selalu membersamai Teman MLG dengan segudang fasilitasnya yang keren abis.
                  Dengan view Sungai Mahakam yang memanjakan mata plus segala wahana yang menyenangkan, siap memberikan pengalaman rekreasi yang berkesan.
                  ditambah spot foto dan vanue yang luas MLG selalu siap mendukung apapun kegiatan kamu di MLG.
                  <br>
                  <br>
                  Yuk, buat moment paling berkesan Teman MLG bersama yang tersayang🙌🏻
                </p>
                <div class="row row-cols-1 row-cols-lg-2">
                  <div class="col mb-3">
                    <div class="d-flex flex-column text-center">
                      <h3 class="accent-color font-1 fw-bold m-0">50+</h3>
                      <p class="font-1">LAMPION</p>
                    </div>
                  </div>
                  <div class="col mb-3">
                    <div class="d-flex flex-column text-center">
                      <h3 class="accent-color font-1 fw-bold m-0">20+</h3>
                      <p class="font-1">TENANT KULINER</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- GALLERY HIGHLIGHTS -->
    <section class="section bg-secondary-dark">
      <div class="r-container">
        <div class="d-flex flex-column">
          <h5 class="accent-color lh-1 ls-2 fw-bold font-1">MAHAKAM LAMPION GARDEN</h5>
          <h3 class="font-2 lh-1 fw-bold">GALLERY HIGHLIGHTS</h3>
          <div class="my-5">
            <div class="row">
              <!-- First Image -->
              <div class="col-md-4">
                <div class="shadow image-container">
                  <img src="image/PXL_20240523_183040420.jpg" alt="Gallery Image 1" class="img-fluid rounded" />
                </div>
              </div>
              <!-- Second Image -->
              <div class="col-md-4">
                <div class="shadow image-container">
                  <img src="image/opening.jpg" alt="Gallery Image 2" class="img-fluid rounded" />
                </div>
              </div>
              <!-- Third Image -->
              <div class="col-md-4">
                <div class="shadow image-container">
                  <img src="image/PXL_20240523_183248511.jpg" alt="Gallery Image 3" class="img-fluid rounded" />
                </div>
              </div>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
              <p>
                Selamat datang di Mahakam Lampion Garden! Di sini, setiap sudut penuh dengan keindahan yang bikin betah. Lihat deh, lampion-lampion berwarna-warni yang bikin suasana jadi romantis banget, cocok buat foto-foto bareng pasangan atau keluarga. Buat yang bawa anak-anak, ada area bermain yang aman dan seru banget, dikelilingi lampion warna-warni yang bikin mereka happy.
              </p>
            </div>
            <div class="col">
              <div class="d-flex flex-column">
                <p>
                  Setelah puas jalan-jalan, bisa istirahat di food court yang menawarkan berbagai pilihan makanan enak. Sambil makan, kamu tetap bisa menikmati suasana hangat dari cahaya lampion. Setiap foto di galeri ini menangkap keindahan dan keseruan yang ada di Mahakam Lampion Garden Samarinda, bikin setiap kunjungan jadi pengalaman yang luar biasa.
                </p>
                <div class="d-flex flex-lg-row flex-column gap-lg-5 gap-3 py-3">
                  <a href="galeri.php" class="px-4 py-2 btn button accent-color button-outline rounded-0 fw-bold font-1 hover-transform">
                    LIHAT SELENGKAPNYA
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section class="section position-relative bg-secondary-dark">
      <div class="texture-overlay"></div>
      <div class="r-container position-relative" style="z-index: 2">
        <div class="d-flex flex-column text-center gap-3">
          <h5 class="accent-color lh-1 ls-2 fw-bold font-1">FASILITAS</h5>
          <h3 class="font-2 lh-1 fw-bold">APA AJA SIH YANG ADA DI MLG ?</h3>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 text-start w-100 mt-3">
            <div class="col mb-3">
              <div class="d-flex flex-row gap-3">
                <span class="accent-color" style="font-size: 3rem"><i class="fa-solid fa-photo-film"></i></span>
                <div>
                  <h5 class="font-2 fw-bold">TAMAN LAMPION</h5>
                  <p>
                    Siapkan gaya dan filter andalan deh kalau udah masuk di area Mahakam Lampion Garden, tempatnya Instagramable banget loh✨
                  </p>
                </div>
              </div>
            </div>
            <div class="col mb-3">
              <div class="d-flex flex-row gap-3">
                <span class="accent-color" style="font-size: 3rem"><i class="fa-solid fa-gamepad"></i></span>
                <div>
                  <h5 class="font-2 fw-bold">WAHANA BERMAIN</h5>
                  <p>
                    Wajib dicoba deh, pengalaman bermain di berbgai wahana di tengah suasana outdoor Mahakam Lampion Garden✨
                  </p>
                </div>
              </div>
            </div>
            <div class="col mb-3">
              <div class="d-flex flex-row gap-3">
                <span class="accent-color" style="font-size: 3rem"><i class="fa-solid fa-bowl-food"></i></span>
                <div>
                  <h5 class="font-2 fw-bold">KULINER</h5>
                  <p>
                    Berbagai kuliner bikin candu banget deh, apalagi dimakan bareng keluarga sambil nikmati angin sepoynya MLG✨
                  </p>
                </div>
              </div>
            </div>
            <div class="col mb-3">
              <div class="d-flex flex-row gap-3">
                <span class="accent-color" style="font-size: 3rem"><i class="fa-solid fa-music"></i></span>
                <div>
                  <h5 class="font-2 fw-bold">LIVE MUSIC</h5>
                  <p>
                    Selain nikmatin kuliner dan angin sepoynya Samarinda, Live Music juga bakalan menghibur teman-teman MLG✨
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- STORY -->
    <section class="section bg-secondary-dark">
      <div class="r-container">
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col col-lg-5">
            <div class="d-flex flex-column gap-3">
              <h5 class="accent-color lh-1 ls-2 fw-bold font-1">WISATA & WAHANA</h5>
              <h3 class="font-2 lh-1 fw-bold">SERU GAK SIH?</h3>
              <p>
                Satu satunya destinasi andalan di Samarinda yang punya area lesehan dan banyak wahana plus pemandangan langsung Sungai Mahakam✨‼️.
                <br>
                <br>
                Dijamin ngumpul dan nongki disini bikin kecanduan. gak jaman, deh nongki outdorr tapi kena debu dan berisiknya jalanan luar huhu, yuk gas ke MLG✨.
              </p>
              <p>
                Banyak juga testimonial dari berbagai pengunjung yang dapat kamu lihat di bagian bawah!
              </p>
              <div>
                <h5 class="accent-color font-2 m-0">MLG MANAGEMENT</h5>
                <span>SAMARINDA</span>
              </div>
            </div>
          </div>
          <div class="col col-lg-7">
            <div class="image-frame">
              <img src="image/PXL_20240523_184347284.jpg" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIAL -->
    <section class="section">
      <div class="r-container">
        <div class="d-flex flex-column text-center">
          <h5 class="accent-color lh-1 ls-2 fw-bold font-1">TESTIMONIAL</h5>
          <h3 class="font-2 lh-1 fw-bold">PENDAPAT PENGUNJUNG TENTANG KAMI?</h3>
          <p>
            Berbagai cerita menarik dibagikan oleh para pengunjung kami, semoga membuat anda
            tertarik ke Mahakam Lampion Garden ya!
          </p>
          <div class="overflow-hidden text-start">
            <div class="swiper">
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="d-flex flex-column p-4 gap-3 bg-secondary-dark">
                    <ul class="d-flex flex-row gap-2 m-0 p-0" style="list-style: none">
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <p>
                      Perfect place buat ngumpul sama teman-teman. Lampionnya berwarna-warni dan
                      area sekitar juga bersih. Recommended!
                    </p>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <h6 class="accent-color m-0 font-1 fw-bold">ABDUL RAHMAN</h6>
                        <span>Mahasiswa</span>
                      </div>
                      <span class="fs-1 text-gray m-0"><i class="fa-solid fa-quote-right"></i></span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="d-flex flex-column p-4 gap-3 bg-secondary-dark">
                    <ul class="d-flex flex-row gap-2 m-0 p-0" style="list-style: none">
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <p>
                      Senang banget bisa datang ke sini! Tempatnya indah, banyak spot foto yang
                      instagramable. Bakal sering-sering ke sini deh.
                    </p>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <h6 class="accent-color m-0 font-1 fw-bold">MUTIARA</h6>
                        <span>Mahasiswi</span>
                      </div>
                      <span class="fs-1 text-gray m-0"><i class="fa-solid fa-quote-right"></i></span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="d-flex flex-column p-4 gap-3 bg-secondary-dark">
                    <ul class="d-flex flex-row gap-2 m-0 p-0" style="list-style: none">
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <p>
                      Lampion Garden Samarinda menawarkan pengalaman yang baru dengan suasana
                      Riversidenya. Tempatnya nyaman, banyak wahana yang seru. Pasti balik lagi ke
                      sini!
                    </p>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <h6 class="accent-color m-0 font-1 fw-bold">CHANDRA PERDANA</h6>
                        <span>Mahasiswa</span>
                      </div>
                      <span class="fs-1 text-gray m-0"><i class="fa-solid fa-quote-right"></i></span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="d-flex flex-column p-4 gap-3 bg-secondary-dark">
                    <ul class="d-flex flex-row gap-2 m-0 p-0" style="list-style: none">
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <p>
                      Saya dan keluarga sangat menikmati saat di Lampion Garden. Pemandangannya
                      indah, dan banyak makanan enak di cafenya. Tempat yang cocok dengan
                      keluarga!
                    </p>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <h6 class="accent-color m-0 font-1 fw-bold">SYAMSUDIN</h6>
                        <span>Pekerja</span>
                      </div>
                      <span class="fs-1 text-gray m-0"><i class="fa-solid fa-quote-right"></i></span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="d-flex flex-column p-4 gap-3 bg-secondary-dark">
                    <ul class="d-flex flex-row gap-2 m-0 p-0" style="list-style: none">
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <p>
                      Lampion Garden Samarinda benar-benar keren! Lampionnya cantik dan suasananya
                      romantis banget. Cocok untuk jalan-jalan sama keluarga atau pasangan.
                    </p>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <h6 class="accent-color m-0 font-1 fw-bold">ANANDA ASIH</h6>
                        <span>Pekerja</span>
                      </div>
                      <span class="fs-1 text-gray m-0"><i class="fa-solid fa-quote-right"></i></span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="d-flex flex-column p-4 gap-3 bg-secondary-dark">
                    <ul class="d-flex flex-row gap-2 m-0 p-0" style="list-style: none">
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                      <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <p>
                      Saya dan teman-teman suka ke Lampion Garden Samarinda karena kuliner di
                      foodcourt dan cafenya enak-enak banget, cocok untuk nongki dan makan malam!
                    </p>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <h6 class="accent-color m-0 font-1 fw-bold">BERLIANA</h6>
                        <span>Pekerja</span>
                      </div>
                      <span class="fs-1 text-gray m-0"><i class="fa-solid fa-quote-right"></i></span>
                    </div>
                  </div>
                </div>
              </div>
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