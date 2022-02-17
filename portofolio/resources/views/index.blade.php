@extends('layouts.base')
@section('title', 'Portofolio')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Profile</h1>
      <h2>Fajar S Arrizal</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>About Me</h2>
          <p>Saya Fajar lahir di Bandung tahun 2002. Saya lulusan SMKN 4 BANDUNG dan sekarang sedang kuliah di STMIK AMIKBANDUNG. </p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-phone"></i></div>
              <h4 class="title"><a href="https://wa.me/6285156281848">Whatsapp</a></h4>
              <p class="description">WhatsApp Messenger adalah aplikasi pesan untuk ponsel cerdas. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-instagram"></i></div>
              <h4 class="title"><a href="https://instagram.com/arrizal27">Instagram</a></h4>
              <p class="description">Instagram adalah sebuah aplikasi berbagi foto dan video </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bxl-github"></i></div>
              <h4 class="title"><a href="https://github.com/arrizal27">Github</a></h4>
              <p class="description">GitHub adalah layanan hos web bersama untuk proyek pengembangan perangkat lunak </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bxl-discord"></i></div>
              <h4 class="title"><a href="">Discord</a></h4>
              <p class="description">Discord adalah VoIP, perpesanan instan dan platform distribusi digital asal Amerika </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="hobbies" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Hobbies</h2>
          <p>Hobi adalah kegiatan rekreasi yang dilakukan pada waktu luang untuk menenangkan pikiran seseorang. Sementara menurut Kamus Besar Bahasa Indonesia (KBBI), Hobi adalah kata benda (noun) yang dapat diartikan sebagai kegemaran</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-10.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="{{url('/detail')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-15.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-15.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="{{url('/hobi2')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-189.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-189.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="{{url('/hobi3')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

          <div class="text-center">
            <h3>Quotes of The Day</h3>
            <p>Never gonna give you up, never gonna let you down</p>
          </div>

        </div>
      </section><!-- End Cta Section -->
  </main><!-- End #main -->
@endsection
