@include('templates/header')

<section class="home-slider-3 mt-n2">
        <div class=" petmark-slick-slider  home-slider" data-slick-setting='{
            "autoplay": true,
            "autoplaySpeed": 8000,
            "slidesToShow": 1,
            "dots": true
        }'>
            <div class="single-slider home-content bg-image" data-bg="{{ url('images/template/slider-1.jpg') }}">

                    <div class="row">
                        <div class="col-lg-12">
                            
                            <h4 style="color: #ff7c00">HEWAN PELIHARAAN</h4>
                            <h2 class="mt-4">Diskon Hingga 20%</h2>
                            <h4 class="mt--20">Berlaku untuk hewan anjing dan kucing<br>Yang dijual pada official store</h4>
                            <div class="slider-btn mt--30">
                                    <a href="{{ url('/store') }}" class="btn btn-outlined--orange btn-rounded">Belanja</a>
                            </div>
                                
                        </div>
                    </div>

                <span class="herobanner-progress"></span>
            </div>
            <div class="single-slider home-content bg-image" data-bg="{{ url('images/template/slider-2.jpg') }}">

                    <div class="row">
                        <div class="col-lg-12">

                            <h4 style="color: #ff7c00">BELI PAKET BUNDLE</h4>
                            <h2 class="mt-4">JAUH LEBIH MURAH</h2>
                            <h4 class="mt--20">Tersedia paket bundle yang meliputi<br>Kandang, bowl dan litter box</h4>
                            <div class="slider-btn mt--30">
                                    <a href="{{ url('/store') }}" class="btn btn-outlined--orange btn-rounded">Belanja</a>
                            </div>
                                
                        </div>
                    </div>

                <span class="herobanner-progress"></span>
            </div>

            <div class="single-slider home-content bg-image" data-bg="{{ url('images/template/slider-1.jpg') }}">

                <div class="row">
                    <div class="col-lg-12">
                        
                        <h4 style="color: #ff7c00">HEWAN PELIHARAAN</h4>
                            <h2 class="mt-4">Diskon Hingga 20%</h2>
                            <h4 class="mt--20">Berlaku untuk hewan anjing dan kucing<br>Yang dijual pada official store</h4>
                            <div class="slider-btn mt--30">
                                    <a href="{{ url('/store') }}" class="btn btn-outlined--orange btn-rounded">Detail</a>
                            </div>
                            
                    </div>
                </div>

            <span class="herobanner-progress"></span>
        </div>

        <div class="single-slider home-content bg-image" data-bg="{{ url('images/template/slider-2.jpg') }}">

            <div class="row">
                <div class="col-lg-12">

                    <h4 style="color: #ff7c00">BELI PAKET BUNDLE</h4>
                            <h2 class="mt-4">JAUH LEBIH MURAH</h2>
                            <h4 class="mt--20">Tersedia paket bundle yang meliputi<br>Kandang, bowl dan litter box</h4>
                            <div class="slider-btn mt--30">
                                    <a href="{{ url('/store') }}" class="btn btn-outlined--orange btn-rounded">Detail</a>
                            </div>
                        
                </div>
            </div>

        <span class="herobanner-progress"></span>
    </div>

        <div class="single-slider home-content bg-image" data-bg="{{ url('images/template/slider-1.jpg') }}">

            <div class="row">
                <div class="col-lg-12">
                    
                    <h4 style="color: #ff7c00">HEWAN PELIHARAAN</h4>
                            <h2 class="mt-4">Diskon Hingga 20%</h2>
                            <h4 class="mt--20">Berlaku untuk hewan anjing dan kucing<br>Yang dijual pada official store</h4>
                            <div class="slider-btn mt--30">
                                    <a href="{{ url('/store') }}" class="btn btn-outlined--orange btn-rounded">Detail</a>
                            </div>
                        
                </div>
            </div>

        <span class="herobanner-progress"></span>
    </div>
        </div>
	</section>

<!-- Slider One / Normal Two Column Slider -->

<section class="category-section pt--20">
    <div class="container">
        <div class="category-block">
            <div class="row no-gutters">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="{{ url('/store/dogfood') }}" class="icon">
                            <img src="{{ url('images/template/category-1.png') }}" alt="">
                        </a>
                        <h3><a href="{{ url('/store/30') }}">Makanan Anjing</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="{{ url('/store/catfood') }}" class="icon">
                            <img src="{{ url('images/template/category-2.png') }}" alt="">
                        </a>
                        <h3><a href="{{ url('/store/31') }}">Makanan Kucing</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="{{ url('/store/fishfood') }}" class="icon">
                            <img src="{{ url('images/template/category-3.png') }}" alt="">
                        </a>
                        <h3><a href="{{ url('/store/32') }}">Makanan Ikan</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="{{ url('/store/birdfood') }}" class="icon">
                            <img src="{{ url('images/template/category-4.png') }}" alt="">
                        </a>
                        <h3><a href="{{ url('/store/33') }}">Makanan Burung</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="{{ url('/store/reptilfood') }}" class="icon">
                            <img src="{{ url('images/template/category-5.png') }}" alt="">
                        </a>
                        <h3><a href="{{ url('/store/34') }}">Makanan Reptil</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="{{ url('/store/smallfood') }}" class="icon">
                            <img src="{{ url('images/template/category-6.png') }}" alt="">
                        </a>
                        <h3><a href="{{ url('/store/35') }}">Makanan Hewan Kecil</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Home-2 => Promotion Block 1 -->
<section class="pt--20 space-db--30">
    <h2 class="d-none">Promotion Block
    </h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="promo-image" href="{{ url('/store') }}">
                        <img src="{{ url('images/template/promo1.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="promo-image" href="{{ url('/store') }}">
                        <img src="{{ url('images/template/promo2.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="promo-image" href="{{ url('/store') }}">
                        <img src="{{ url('images/template/promo3.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="pt--50">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 col-xl-9">
                <div class="slider-header-block tab-header d-flex border-bottom mb--20">
                    <div class="block-title-2 mb-0 border-0">
                        <h2>REKOMENDASI</h2>
                    </div>
                    <ul class="pm-tab-nav tab-nav-style-2 nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hewan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Makanan & Obat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Aksesoris</a>
                        </li>
                    </ul>
                </div>
                  
                  <div class=" tab-content pm-slider-tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="petmark-slick-slider petmark-slick-slider--wrapper-2 border grid-column-slider  arrow-type-two" data-slick-setting='{
                                "autoplay": false,
                                "autoplaySpeed": 3000,
                                "slidesToShow": 4,
                                "rows" :2,
                                "arrows": true
                            }'
                    data-slick-responsive='[
                                {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                            ]'>
        
                    @foreach($hewan as $row)
                    <div class="single-slide">
                        <div class="pm-product text-center">
                            <div class="image">
                            <a href="{{ url('/detail/'.$row->id) }}"><img src="{{ $row->foto }}" alt=""></a>
                            </div>
                            <div class="content">
                                <h3> <a href="{{ url('/detail/'.$row->id) }}">{{ $row->nama }}</a></h3>
                                <p>{{ $row->lokasi }}</p>
                                <div class="price text-orange">
                                    <span>Rp. {{ number_format($row->harga, 2) }}</span>
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="petmark-slick-slider border grid-column-slider  arrow-type-two" data-slick-setting='{
                                "autoplay": false,
                                "autoplaySpeed": 3000,
                                "slidesToShow": 4,
                                "rows" :2,
                                "arrows": true
                            }'
                    data-slick-responsive='[
                    {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                    {"breakpoint":768, "settings": {"slidesToShow": 2} },
                    {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                    ]'>
        
                    @foreach($makanan as $row)
                    <div class="single-slide">
                        <div class="pm-product text-center">
                            <div class="image">
                            <a href="{{ url('/detail/'.$row->id) }}"><img src="{{ $row->foto }}" alt=""></a>
                            </div>
                            <div class="content">
                                <h3> <a href="{{ url('/detail/'.$row->id) }}">{{ $row->nama }}</a></h3>
                                <p>{{ $row->lokasi }}</p>
                                <div class="price text-orange">
                                    <span>Rp. {{ number_format($row->harga, 2) }}</span>
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="petmark-slick-slider border grid-column-slider  arrow-type-two" data-slick-setting='{
                                "autoplay": false,
                                "autoplaySpeed": 3000,
                                 "slidesToShow": 4,
                                "rows" :2,
                                "arrows": true
                            }'
                    data-slick-responsive='[
                    {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                    {"breakpoint":768, "settings": {"slidesToShow": 2} },
                    {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                    ]'>
        
                    @foreach($aksesoris as $row)
                    <div class="single-slide">
                        <div class="pm-product text-center">
                            <div class="image">
                            <a href="{{ url('/detail/'.$row->id) }}"><img src="{{ $row->foto }}" alt=""></a>
                            </div>
                            <div class="content">
                                <h3> <a href="{{ url('/detail/'.$row->id) }}">{{ $row->nama }}</a></h3>
                                <p>{{ $row->lokasi }}</p>
                                <div class="price text-orange">
                                    <span>Rp. {{ number_format($row->harga, 2) }}</span>
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
                </div>
                <div class="col-lg-4 col-xl-3 pt--50 pt-lg-0">
                        <div class="block-title-2">
                                <h2>Paling Laku</h2>
                            </div>
                            <!--Three Row One Column Slider -->
                            <div class="petmark-slick-slider petmark-slick-slider--wrapper-2 border one-column-slider three-row"
                                data-slick-setting='{
                                    "autoplaySpeed": 3000,
                                    "slidesToShow": 1,
                                    "rows" :3,
                                    "arrows": true
                                }'
                                data-slick-responsive='[
                                    {"breakpoint":991, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":575, "settings": {"slidesToShow": 1} }
                                ]'>
                                @foreach($bestseller as $row)
                                <div class="single-slide">
                                    <div class="pm-product product-type-list text-center">
                                        <a href="{{ url('/detail/'.$row->id) }}" class="image">
                                            <img src="{{ $row->foto }}" alt="" class="mt-4">
                                        </a>
                                        <div class="content">
                                            <h3> <a href="{{ url('/detail/'.$row->id) }}">{{ $row->nama }}</a></h3>
                                            <p>{{ $row->lokasi }}</p>
                                            <div class="price text-orange">
                                                <span>Rp. {{ number_format($row->harga, 2) }}</span>
                                            </div>
                                        @if($row->bintang==5)
                                            <div class="rating-widget mt--20" style="margin-bottom: -15px">
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                            </div>
                                        @elseif($row->bintang==4)
                                            <div class="rating-widget mt--20" style="margin-bottom: -15px">
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                            </div>
                                        @elseif($row->bintang==3)
                                            <div class="rating-widget mt--20" style="margin-bottom: -15px">
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                            </div>
                                        @elseif($row->bintang==2)
                                            <div class="rating-widget mt--20" style="margin-bottom: -15px">
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                            </div>
                                        @elseif($row->bintang==1)
                                            <div class="rating-widget mt--20" style="margin-bottom: -15px">
                                                <a href="" class="single-rating"><i class="fas fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                                <a href="" class="single-rating"><i class="far fa-star"></i></a>
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
			        </div>
		        </div>
            </div>
            
    
    <section class="pt--50">
        <div class="container">
            <div class="block-title-3">
                <h2>FLASH SALE</h2>
            </div>
            <div class="petmark-slick-slider border normal-two-column-slider"
                data-slick-setting='{
                    "autoplaySpeed": 3000,
                    "slidesToShow": 2,
                    "arrows": true
                }'
                data-slick-responsive='[
                    {"breakpoint":991, "settings": {"slidesToShow": 1} },
                    {"breakpoint":575, "settings": {"slidesToShow": 1} }
                ]'>
                @foreach($flashsale as $row)
                <div class="single-slide">
                    <div class="pm-product product-type-list">
                        <a href="{{ url('/detail/'.$row->id) }}" class="image">
                            <img src="{{ $row->foto }}" alt="" style="height:180px">
                        </a>
                        <div class="content">
                           <h3 class="font-weight-500">{{ $row->nama }}</h3>
                           <p>{{ $row->lokasi }}</p>
                            
                            <div class="price text-orange mb-3" >
                                <span class="old">{{ number_format(($row->harga+10000),2) }}</span>
                                <span>Rp. {{ number_format($row->harga,2) }}</span>
                            </div>
                            {{-- <p >Kandang kucing murah kualitas bagus dan bahan tebal.</p> --}}
                            <div class="count-down-block">
                                <div class="product-countdown" data-countdown="2024/03/10"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="container pt--50 pb--50">
        <div class="policy-block border-four-column">
            <div class="row">
                 <div class="col-lg-3 col-sm-6">
                    <div class="policy-block-single p-3">
                        <div class="icon">
                            <span class="ti-truck"></span>
                        </div>
                        <div class="text">
                            <h3>Layanan Antar</h3>
                            <p>Menerima pesanan antar kota antara penjual dan pembeli.</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-sm-6">
                    <div class="policy-block-single p-3">
                        <div class="icon">
                            <span class="ti-credit-card"></span>
                        </div>
                        <div class="text">
                            <h3>COD</h3>
                            <p>Pembayaran dilakukan COD untuk memastikan kesesuaian produk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block-single p-3">
                        <div class="icon">
                            <span class="ti-gift"></span>
                        </div>
                        <div class="text">
                            <h3>Packaging Aman</h3>
                            <p>Keamanan hewan dan produk terjamin selama di perjalanan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block-single p-3">
                        <div class="icon">
                            <span class="ti-headphone-alt"></span>
                        </div>
                        <div class="text">
                            <h3>Layanan 24/7</h3>
                            <p>Tersedia customer service yang siap melayani selama 24/7.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('templates/footer')