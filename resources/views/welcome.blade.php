<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sistem Absensi Non-ASN - Dinas Kominfo Binjai</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Apple Touch Icon -->
  <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('img/favicon.png') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">

  
</head> 

<body class="index-page">

 <header id="header" class="header d-flex align-items-center fixed-top" 
  style="background: linear-gradient(135deg, #0059b3, #66b2ff); color: #ffffff; font-family: 'Segoe UI', sans-serif; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); z-index: 999;">
  
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a href="index.html" class="logo d-flex align-items-center me-auto text-white text-decoration-none">
      <img src="img/logo-kominfo.png" alt="Logo Kominfo" style="height: 40px; margin-right: 10px;">
      <h1 class="sitename mb-0" style="color: #ffffff;">SIPENA</h1>
    </a>

    <!-- Menu -->
    <nav id="navmenu" class="navmenu d-flex align-items-center">
      <ul class="d-flex list-unstyled mb-0">
        <li><a href="#hero" class="nav-link px-3 text-white">Home</a></li>
        <li><a href="#about" class="nav-link px-3 text-white">Informasi</a></li>
        <li><a href="#contact" class="nav-link px-3 text-white">Kontak</a></li>
       <li><a href="{{ route('admin.login') }}" class="btn btn-outline-light ms-3 px-4 py-1 rounded-pill" style="border: 2px solid white;">
    Login</a></li>
      </ul>
      
      <!-- Toggle Mobile -->
      <i class="mobile-nav-toggle d-xl-none bi bi-list text-white fs-3 ms-3"></i>
    </nav>

  </div>
</header>

  <main class="main">

    <!-- Hero Section -->
<section id="hero" class="hero section dark-background">
  <img src="{{ asset('img/hero-bg.jpg') }}" data-aos="fade-in">

  <div class="container d-flex flex-column align-items-center">
    <h2 data-aos="fade-up" data-aos-delay="100">Sistem Absensi Non-ASN</h2>
    <p data-aos="fade-up" data-aos-delay="200">Sistem ini digunakan untuk mencatat kehadiran pegawai Non-ASN di lingkungan Dinas Komunikasi dan Informatika Kota Binjai secara real-time dan akurat.</p>
    
    <!-- ✅ Tombol Absen Masuk & Pulang -->
    <div class="d-flex gap-3 mt-4" data-aos="fade-up" data-aos-delay="300">
    <a href="{{ route('form.masuk.store') }}" class="btn btn-success px-4 py-2 rounded">Absen Masuk</a>
    <a href="{{ route('form.pulang.store') }}" class="btn btn-danger px-4 py-2 rounded">Absen Pulang</a>
</div>

  </div>
</section>


<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3>Sistem Absensi Non-ASN</h3>
        <img class="img-fluid rounded-4 mb-4" src="{{ asset('img/about.jpg') }}">
        <p>Sistem ini dibuat untuk mendukung tata kelola kehadiran pegawai Non-ASN secara efisien, transparan, dan digital.</p>
        <p>Melalui fitur pencatatan otomatis, verifikasi wajah, dan pelaporan harian, sistem ini membantu monitoring absensi lebih mudah dan dapat diakses oleh admin secara langsung.</p>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            Beberapa keunggulan sistem absensi ini:
          </p>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span>Verifikasi wajah untuk menghindari manipulasi data kehadiran.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Data absensi tersimpan aman dan dapat diakses kapan saja.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Terintegrasi dengan dashboard admin untuk pemantauan harian.</span></li>
          </ul>
          <p>
            Sistem ini merupakan bagian dari komitmen Dinas Kominfo Binjai dalam menerapkan digitalisasi pelayanan kepegawaian.
          </p>
          <div class="position-relative mt-4">
            <img class="img-fluid rounded-4" src="{{ asset('img/about-2.jpg') }}" alt="">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Contact Section -->
<section id="contact" class="contact section bg-light py-5">

  <!-- Section Title -->
  <div class="container text-center mb-5" data-aos="fade-up">
    <h2 class="fw-bold text-dark">Kontak</h2>
    <p class="text-muted">Hubungi Kami</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-4">

     <!-- Info Section -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="row g-4">

        <!-- Alamat -->
        <div class="col-md-4">
          <div class="bg-white shadow-sm p-4 rounded d-flex align-items-start">
            <i class="bi bi-geo-alt-fill fs-3 text-dark me-3"></i>
            <div>
              <h5 class="mb-1 fw-semibold text-dark">Alamat</h5>
              <p class="mb-0 text-muted"> Jalan Kartini, Kec. Binjai Kota, Kota Binjai, Sumatera Utara 20741</p>
            </div>
          </div>
        </div>

        <!-- Telepon -->
        <div class="col-md-4">
          <div class="bg-white shadow-sm p-4 rounded d-flex align-items-start">
            <i class="bi bi-telephone-fill fs-3 text-dark me-3"></i>
            <div>
              <h5 class="mb-1 fw-semibold text-dark">Telepon</h5>
              <p class="mb-0 text-muted">(061) 123456</p>
            </div>
          </div>
        </div>

        <!-- Email -->
        <div class="col-md-4">
          <div class="bg-white shadow-sm p-4 rounded d-flex align-items-start">
            <i class="bi bi-envelope-fill fs-3 text-dark me-3"></i>
            <div>
              <h5 class="mb-1 fw-semibold text-dark">Email</h5>
              <p class="mb-0 text-muted">admin@kominfo.go.id</p>
            </div>
          </div>
        </div>

      </div> <!-- row -->
    </div> <!-- col -->
  </div> <!-- row -->
</div> <!-- container -->

</section>
<!-- End Contact Section -->


  </main>
<footer id="footer" class="footer text-white py-4" style="background: linear-gradient(135deg, #66aaff, #3366cc); font-family: 'Segoe UI', sans-serif; font-size: 0.95rem;">
  <div class="container" style="max-width: 1000px;">

    <!-- Baris Konten Footer -->
    <div class="row justify-content-between align-items-start">

      <!-- Kontak Kami -->
      <div class="col-md-6 col-lg-6 mb-3">
        <h6 class="fw-bold mb-2 text-white">Kontak Kami</h6>
        <ul class="list-unstyled mb-0 text-white">
          <li><i class="bi bi-geo-alt-fill me-2"></i>Jalan Kartini, Kec. Binjai Kota</li>
          <li><i class="bi bi-geo-fill me-2"></i>Binjai, Sumatera Utara 20741</li>
          <li><i class="bi bi-telephone-fill me-2"></i>(061) 123456</li>
          <li><i class="bi bi-envelope-fill me-2"></i>admin@kominfo.go.id</li>
        </ul>
      </div>

      <!-- Ikuti Kami -->
      <div class="col-md-6 col-lg-6 mb-3">
        <h6 class="fw-bold mb-2 text-white">Ikuti Kami</h6>
        <div class="d-flex flex-wrap">
          <a href="https://www.facebook.com/diskominfokotabinjai/?locale=id_ID" target="_blank" rel="noopener noreferrer" class="me-3 text-white fs-5">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://www.instagram.com/dinaskominfokotabinjai/" target="_blank" rel="noopener noreferrer" class="me-3 text-white fs-5">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.youtube.com/@diskominfokotabinjai6252" target="_blank" rel="noopener noreferrer" class="text-white fs-5">
            <i class="bi bi-youtube"></i>
          </a>
        </div>
      </div>

    </div>

    <!-- Garis Bawah & Hak Cipta -->
    <div class="row mt-3 pt-3 border-top border-light">
      <div class="col text-center small text-white">
        &copy; {{ date('Y') }} Dinas Kominfo Kota Binjai. All rights reserved.
      </div>
    </div>

  </div>
</footer>






  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
