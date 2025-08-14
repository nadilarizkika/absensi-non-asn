<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sistem Absensi Non-ASN - Dinas Kominfo Binjai1</title>
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

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


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
       <li><a href="{{ route('admin.login') }}" class="btn btn-outline-light ms-3 px-4 py-1 rounded-0" 
       style="border: 2px solid white;">Login</a></li>
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


<!-- =========================
      ABOUT (Rapi + Animasi)
========================= -->
<section id="about" class="py-5" style="background: linear-gradient(180deg,#f6f9ff 0%,#ffffff 100%);">
  <div class="container">
    <div class="row g-5 align-items-center">

      <!-- Teks -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
        <span class="badge rounded-pill px-3 py-2 mb-3" style="background:#e7f0ff; color:#0b5ed7;">
          Sistem Absensi Non-ASN
        </span>
        <h2 class="fw-bold mb-3" style="letter-spacing:.2px;">Efisien, Transparan, & Digital</h2>
        <p class="mb-3">
          Sistem ini dibuat untuk mendukung tata kelola kehadiran pegawai Non-ASN secara efisien, transparan, dan digital.
        </p>
        <p class="mb-4">
          Melalui fitur pencatatan otomatis, verifikasi wajah, dan pelaporan harian, sistem ini membantu monitoring absensi lebih mudah dan dapat diakses oleh admin secara langsung.
        </p>

        <!-- Keunggulan (grid rapi) -->
        <div class="row g-3">
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex align-items-start p-3 rounded-4 shadow-sm bg-white h-100 feature-card">
              <div class="icon-badge me-3" data-bs-toggle="tooltip" title="Teknologi Face Recognition">
                <i class="bi bi-emoji-smile-upside-down"></i>
              </div>
              <div>
                <h6 class="mb-1">Verifikasi Wajah</h6>
                <small class="text-muted">Mengurangi manipulasi kehadiran.</small>
              </div>
            </div>
          </div>
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="150">
            <div class="d-flex align-items-start p-3 rounded-4 shadow-sm bg-white h-100 feature-card">
              <div class="icon-badge me-3" data-bs-toggle="tooltip" title="Keamanan & Akses Data">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <h6 class="mb-1">Penyimpanan Aman</h6>
                <small class="text-muted">Data tersimpan & siap diakses kapan saja.</small>
              </div>
            </div>
          </div>
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex align-items-start p-3 rounded-4 shadow-sm bg-white h-100 feature-card">
              <div class="icon-badge me-3" data-bs-toggle="tooltip" title="Pantau Harian">
                <i class="bi bi-speedometer2"></i>
              </div>
              <div>
                <h6 class="mb-1">Terintegrasi Dashboard</h6>
                <small class="text-muted">Pemantauan real-time oleh admin.</small>
              </div>
            </div>
          </div>
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="250">
            <div class="d-flex align-items-start p-3 rounded-4 shadow-sm bg-white h-100 feature-card">
              <div class="icon-badge me-3" data-bs-toggle="tooltip" title="Operasional yang Mulus">
                <i class="bi bi-check2-circle"></i>
              </div>
              <div>
                <h6 class="mb-1">Operasional Ringan</h6>
                <small class="text-muted">Antarmuka sederhana & responsif.</small>
              </div>
            </div>
          </div>
        </div>

        <p class="mt-4 mb-0">
          Sistem ini merupakan bagian dari komitmen <strong>Dinas Kominfo Binjai</strong>
          dalam menerapkan digitalisasi pelayanan kepegawaian.
        </p>
      </div>

      <!-- Gambar (stack rapi + animasi hover) -->
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
  <div class="d-flex flex-column gap-3">

    <!-- Foto Utama -->
    <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm img-zoom">
      <img src="{{ asset('img/about.jpg') }}" alt="Tentang Sistem Absensi" class="w-100 h-100" style="object-fit:cover;">
    </div>

    <!-- Video Thumbnail -->
    <div class="position-relative ratio ratio-16x9 rounded-4 overflow-hidden shadow img-zoom">
      <img src="{{ asset('img/about-2.jpg') }}" alt="Video Sistem" class="w-100 h-100" style="object-fit:cover;">
      <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox play-btn" aria-label="Putar video"></a>
    </div>

  </div>
</div>


        <!-- Pada mobile, tampilkan thumbnail video di bawah supaya tidak bertumpuk -->
        <div class="d-md-none mt-3" data-aos="fade-up" data-aos-delay="150">
          <div class="position-relative">
            <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow img-zoom">
              <img src="{{ asset('img/about-2.jpg') }}" alt="Video Sistem" class="w-100 h-100" style="object-fit:cover;">
            </div>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox play-btn" aria-label="Putar video"></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
      CONTACT (Rapi + Konsisten)
========================= -->
<section id="contact" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold mb-2">Kontak</h2>
      <p class="text-muted mb-0">Hubungi Kami</p>
    </div>

    <div class="row g-4 align-items-stretch">

      <!-- Alamat -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="50">
        <div class="card h-100 border-0 shadow-sm rounded-4 lift-on-hover">
          <div class="card-body d-flex">
            <div class="icon-badge me-3" data-bs-toggle="tooltip" title="Alamat Kantor">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div>
              <h5 class="mb-1 fw-semibold">Alamat</h5>
              <p class="mb-0 text-muted">Jalan Kartini, Kec. Binjai Kota, Kota Binjai, Sumatera Utara 20741</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Telepon -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 border-0 shadow-sm rounded-4 lift-on-hover">
          <div class="card-body d-flex">
            <div class="icon-badge me-3" data-bs-toggle="tooltip" title="Telepon">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div>
              <h5 class="mb-1 fw-semibold">Telepon</h5>
              <p class="mb-0 text-muted">(061) 123456</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Email -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
        <div class="card h-100 border-0 shadow-sm rounded-4 lift-on-hover">
          <div class="card-body d-flex">
            <div class="icon-badge me-3" data-bs-toggle="tooltip" title="Email Resmi">
              <i class="bi bi-envelope-fill"></i>
            </div>
            <div>
              <h5 class="mb-1 fw-semibold">Email</h5>
              <p class="mb-0 text-muted">admin@kominfo.go.id</p>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- /row -->
  </div>
</section>

<!-- ================
      STYLE TAMBAHAN
================ -->
<style>
  /* Kapsul ikon */
  .icon-badge{
    display:inline-flex; align-items:center; justify-content:center;
    width:44px; height:44px; border-radius:50%;
    background:#e7f0ff; color:#0b5ed7; flex:0 0 44px;
    font-size:18px;
  }

  /* Kartu fitur/ kontak */
  .feature-card{ transition: transform .25s ease, box-shadow .25s ease; }
  .feature-card:hover{ transform: translateY(-2px); box-shadow:0 .75rem 1.5rem rgba(0,0,0,.08); }
  .lift-on-hover{ transition: transform .25s ease, box-shadow .25s ease; }
  .lift-on-hover:hover{ transform: translateY(-4px); box-shadow:0 1.25rem 2rem rgba(0,0,0,.10); }

  /* Zoom gambar halus */
  .img-zoom img{ transition: transform .5s ease; }
  .img-zoom:hover img{ transform: scale(1.04); }

  /* Thumbnail video mengambang (desktop) */
  .about-float{
    position:absolute; bottom:-12%; left:-6%;
    width:55%; z-index:2;
  }

  /* Tombol play (GLightbox) */
  .play-btn{
    position:absolute; inset:0; margin:auto; width:64px; height:64px;
    display:flex; align-items:center; justify-content:center;
    border-radius:50%; background:rgba(11,94,215,.9);
    box-shadow:0 10px 20px rgba(11,94,215,.25);
    transition: transform .2s ease;
  }
  .play-btn::before{
    content:""; display:block; width:0; height:0;
    border-left:18px solid #fff; border-top:10px solid transparent; border-bottom:10px solid transparent;
    margin-left:4px;
  }
  .play-btn:hover{ transform: scale(1.06); }

  /* Responsif: rapikan overlap pada layar kecil */
  @media (max-width: 991.98px){
    .about-float{ position:static; width:100%; margin-top:1rem; }
  }
</style>

<!-- ================
      JS TOOLTIP
================ -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const triggers = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    triggers.forEach(el => new bootstrap.Tooltip(el));
  });
</script>


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
