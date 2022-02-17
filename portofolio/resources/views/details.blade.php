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
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-10.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-11.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Info Hobi</h3>
              <ul>
                <li><strong>Nama</strong>: Gaming</li>
                <li><strong>Category</strong>: Game Story</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi</h2>
              <p>
                Gamer secara harfiah bisa diartikan sebagai seseorang yang memainkan sebuah permainan (game). Namun ketika dikaitkan dengan konteks lebih mendalam, rasanya kurang tepat bila semua orang yang bermain game bisa langsung disebut sebagai gamer. Kita ambil saja contoh lain, misal smoker (perokok).
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection
