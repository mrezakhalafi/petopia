@include('templates/header')

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/store') }}">Store</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </div>
  </nav>
<!-- Product Details Block -->
<main class="product-details-section">
  <div class="container">
    <div class="pm-product-details">
      <div class="row">
        <!-- Blog Details Image Block -->
        <div class="col-md-6">
          <div class="image-block text-center">
            <!-- Zoomable IMage -->
            <img id="zoom_03" width="400px" height="400px" src="../{{$product->foto }}" data-zoom-image="../{{ $product->foto }}" alt=""/>

            <!-- Product Gallery with Slick Slider -->
            <div id="product-view-gallery" class="elevate-gallery">
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="../{{$product->foto }}"
                data-zoom-image="../{{$product->foto }}">
                <img src="../{{$product->foto }}" alt=""/>
              </a>
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="../{{$product->foto }}"
                data-zoom-image="../{{$product->foto }}">
                <img src="../{{$product->foto }}" alt=""/>
              </a>
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="../{{$product->foto }}"
                data-zoom-image="../{{$product->foto }}">
                <img src="../{{$product->foto }}" alt=""/>
              </a>
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="../{{$product->foto }}"
                data-zoom-image="../{{$product->foto }}">
                <img src="../{{$product->foto }}" alt=""/>
              </a>

            </div>
          </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0">
          <div class="description-block">
            <div class="header-block mb-4">
                <h2>{{ $product->nama }}</h2>
            </div>
            <!-- Rating Block -->
            <div class="rating-block d-flex  mt--10 mb--15">
                @if($product->bintang==5)
                 <div class="rating-widget mr-4">
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
              </div>
                @elseif($product->bintang==4)
              <div class="rating-widget mr-4">
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
              </div>
                  @elseif($product->bintang==3)
                   <div class="rating-widget mr-4">
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
              </div>
                  @elseif($product->bintang==2)
                   <div class="rating-widget mr-4">
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
              </div>
                  @elseif($product->bintang==1)
                   <div class="rating-widget mr-4">
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
              </div>
                @endif
              <p class="rating-text"><a href="">{{ $comment_count }} Ulasan Pembeli</a></p>
            </div>
            <!-- Price -->
            <p class="price text-orange mt-4">Rp. {{ number_format($product->harga,2) }}</p>
            <!-- Blog Short Description -->
            <div class="status">
              <i class="fas fa-check-circle"></i>Official Store
              <i class="fas fa-check-circle ml-4"></i>Pasti Ready
            </div>
            <div class="status mt--20">
                @if(Session::has('name'))
                <p>Dikirim Ke : &nbsp; <span class="text-orange">Lokasi, Kecamatan</span></p>
                @else
                <p>Dikirim Ke : &nbsp; <span class="text-orange">-</span></p>
                @endif
                @if(Session::has('name'))
                <p>Ongkos Kirim : &nbsp; <span class="text-orange">Rp.0</span></p>
                @else
                <p>Ongkos Kirim : &nbsp; <span class="text-orange">-</span></p>
                @endif
                <p>Pembayaran : &nbsp; <span class="text-orange">Cash On Delivery</span></p>
            </div>
            <!-- Amount and Detail -->
            @if(Session::has('name'))
            <form action="{{ url('/keranjang') }}" class="add-to-cart">
              <div class="count-input-block">
                <input type="number" class="form-control text-center" value="1">
              </div>
              <div class="btn-block">
                <button class="btn btn-rounded btn-outlined--primary mr-2" type="button" onclick="keranjang()">Tambahkan Ke Keranjang</button>
                <button class="btn btn-rounded btn-outlined" type="submit">Beli Langsung</button>
              </div>
            </form>
            @else
            <div class="alert alert-warning alert-block">Anda harus <a href="{{ url('/login') }}"><b style="color:#ff7c00">Masuk</b></a> terlebih dahulu untuk membeli produk ini.</div>
            @endif
            <!-- Products Tag & Category Meta -->
            <div class="product-meta mt--30">
              <p>Kategori : <a href="#" class="single-meta">
                  @if(($product->id_kategori)==1)
                  Hewan
                  @elseif(($product->id_kategori)==2)
                  Makanan & Obat
                  @elseif(($product->id_kategori)==3)
                  Aksesoris
                  @elseif(($product->id_kategori)==8)
                  Best Seller
                  @elseif(($product->id_kategori)==9)
                  Flash Sale
                  @endif</a></p>
            </div>
            <!-- Sharing Block 2 -->
            <div class="share-block-2  mt--30">
              <h4>BAGIKAN PRODUK INI</h4>
              <ul class="social-btns social-btns-2">
                <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                <li><a href="http://www.google.com"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="http://www.pinterest.com"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="review-section pt--60">
    <h2 class="sr-only d-none">Review Produk</h2>
    <div class="container">
    
<div class="product-details-tab">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DESKRIPSI</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ULASAN</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
             <img src="{{ url($store['foto']) }}" width="100px"; height="100px" class="mb-3">
          </div>
          <div class="col-md-10">
            <b><p>Nama Toko : </b><span class="text-orange">{{ $store['nama'] }}</span></p>
            <b><p>Aktif : </b><span class="text-orange"> {{ Carbon\Carbon::parse($store['created_at'])->diffForHumans()}} </span></p>
            <b><p>Dikirim Dari : </b><span class="text-orange">{{ $store['lokasi'] }}</span></p>
          </div>
        </div>
      </div>
      <article>
      
          <p class="mt-4 ml-3">{{ $product->deskripsi }}</p>
      </article>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="review-wrapper">
        <h2 class="title-lg mb--20">{{ $comment_count }} ULASAN</h2>
        @if($comment_count>0)
        <div class="review-comment mb--20">
          <div class="avatar">
            <img src="{{ url('images/user/user.png') }}" alt="">
          </div>
          <div class="text">
            @if($comment->bintang==5)
            <div class="rating-widget mb--15">
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
            </div>
             @elseif($comment->bintang==4)
            <div class="rating-widget mb--15">
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
            </div>
            @elseif($comment->bintang==3)
            <div class="rating-widget mb--15">
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
            </div>
            @elseif($comment->bintang==2)
            <div class="rating-widget mb--15">
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
            </div>
            @elseif($comment->bintang==1)
            <div class="rating-widget mb--15">
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
            </div>
            @endif
            <h6 class="author">{{ $comment->nama }} - <span class="font-weight-400">{{ \Carbon\Carbon::parse($comment->created_at)->format('d M Y')}}</span> </h6>
            <p>{{ $comment->komentar }}</p>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
    </div>
  </section>
  <section>
    <!-- Slider bLock 4 -->
    <div class="pt--60">
      <div class="container">
    
        <div class="block-title">
          <h2>LIHAT PRODUK LAINNYA</h2>
        </div>
        <div class="petmark-slick-slider border normal-slider" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "arrows": true
                        }'
                data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>
    
          @foreach($rekomendasi as $row)
          <div class="single-slide">
            <div class="pm-product text-center">
              <div class="image">
                <a href="{{ url('/detail/'.$row->id) }}"><img src="../{{ $row->foto }}" alt=""></a>
              </div>
              <div class="content">
                <h3>{{ $row->nama }}</h3>
                <p>{{ $row->lokasi }}</p>
                <div class="price text-orange">
                  <span>Rp. {{ number_format($row->harga,2) }}</span>
                </div>
                <div class="btn-block">
                  <a href="{{ url('/detail/'.$row->id) }}" class="btn btn-outlined btn-rounded">Detail</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    
  </section>
</main>

@extends('templates/footer')