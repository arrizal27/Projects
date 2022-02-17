@extends('layouts.base')
@section('title','Detail')
@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Details</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-13.jfif" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-14.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-15.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Info Hobi</h3>
              <ul>
                <li><strong>Nama</strong>: Dengerin lagu</li>
                <li><strong>Category</strong>: Pop</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi</h2>
              <p>
                Mendengarkan musik merupakan hal yang disukai oleh banyak orang. Penelitian menunjukkan bahwa mendengarkan musik dapat bermanfaat bagi kesehatan secara keseluruhan, membantu mengatur emosi, dan menciptakan kebahagiaan dan relaksasi dalam kehidupan sehari-hari.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection
