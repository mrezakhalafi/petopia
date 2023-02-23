@include('templates/header')

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tentang</li>
      </ol>
    </div>
  </nav>
  
  <!-- Main Wrapper Start -->
  <main id="content" class="main-content-wrapper overflow-hidden">
    <div class="about-area ">
      <div class="container-fluid p-0">
        <div class="row no-gutters align-items-center">
          <div class="col-lg-6">
            <div class="img-box text-center">
              <img src="{{ url('images/template/about.jpg') }}" alt="about">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-10 offset-1">
                <div class="about-text text-center">
                  <h2 class="heading-secondary">
                    <strong>TENTANG KAMI</strong>
                  </h2>
                  <p class="mb--40 mb-sm--30">Petopia adalah toko hewan peliharaan dan aksesoris hewan online yang memungkinkan penjual untuk membuka toko nya dan melakukan penjualan dengan mudah tanpa harus memikirkan sewa toko dan bayar gaji pegawai. Petopia selalu mengedepankan keamanan transaksi. Petopia menawarkan sebuah pengalaman jual beli hewan peliharaan dan aksesoris hewan secara online yang aman, mudah dan nyaman.
                    Petopia merupakan startup yang didirikan oleh Muhammad Reza Khalafi, lulusan S1 jurusan Informatika Kalbis Institute. Petopia direncanakan akan resmi diluncurkan pada 2022 dan diharapkan sejak nantinya resmi diluncurkan Petopia akan menjadi salah satu Toko Hewan Online Indonesia dengan pertumbuhan yang sangat pesat dan digemari oleh banyak customer.
                  </p>
                  <div class="about-btn">
                    <a href="http://www.instagram.com/mrezakhalafi" class="btn btn-outlined--black">KUNJUNGI KAMI</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <section class="ct-feature-section">
    <div class="container">
      <div class="row justify-content-center text-center mb--20">
        <div class="col-lg-4 col-md-6 col-sm-8 col-12">
          <div class="ct-section-title-2">
            <h2 class="mb--15">HUBUNGI KAMI</h2>
            <p>Jika ada yang perlu ditanyakan anda dapat menghubungi saya melalui media sebagai berikut.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mt--30">
          <div class="ct-feature">
            <div class="icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <h3>Alamat</h3>
          <p>Jl. Cipinang Elok 1 Blok.C No.13<br>
            Jatinegara, Jakarta Timur</p>
      
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt--30">
          <div class="ct-feature">
            <div class="icon">
              <i class="fas fa-phone"></i>
            </div>
            <h3>Telepon</h3>
            <p>081293291580<br>
              087883735365</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt--30">
          <div class="ct-feature">
            <div class="icon">
              <i class="far fa-envelope"></i>
            </div>
              <h3>Email</h3>
              <p>mrezakhalafi@gmail.com<br>
              mrezakhalafi@yahoo.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@extends('templates/footer')