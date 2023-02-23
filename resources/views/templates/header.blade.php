<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ url('css/plugins.css') }}" />
	<link rel="stylesheet" href="{{ url('css/main.css') }}" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('images/favicon.ico') }}">
	<title>Petopia Indonesia - Toko Hewan Online Terlengkap!</title>
</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f55c810f0e7167d000df3a3/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

<body class="petmark-theme-3">
	<div class="site-wrapper">
		<header class="header petmark-header-3">
			<!-- Site Wrapper Starts -->
			<div class="header-top text-white bg-primary">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<ul class="header-links no-border white-color justify-content-center justify-content-lg-start">
								<li><a href="https://www.linkedin.com/in/m-reza-khalafi-45984a106/detail/overlay-view/urn:li:fsd_profileTreasuryMedia:(ACoAABrSSgUBjDtZnWzae0L3OFM8XFNz5sg48xs,1607775841511)/"><i class="fab fa-android"></i> Download aplikasi Petopia</a></li>
								<li><a href="{{ url('/seller') }}"><i class="fas fa-user"></i> Menjadi Seller?</a></li>
							</ul>
						</div>
						<div class="col-lg-6 ">
							<div class="header-top-nav white-color right-nav justify-content-center justify-content-lg-end">
                                @if(Session::has('name'))
                                <div class="nav-item">
                                    Hallo, {{Session::get('name')}}
                                    <button onclick="logout()" class="btn-sm btn-danger ml-2">Logout</button>
                                </div>
                                @else
                                <div class="nav-item">
                                    <a class="" href="login-register.html" role="button"><a href="{{ url('register') }}"><b>Daftar</b></a> atau <a href="{{ url('login') }}"><b>Masuk</b></a></a>
                                </div>
                                @endif
								<div class="nav-item slide-down-wrapper">
									<span>Bahasa :</span>
									<a class="slide-down--btn" href="#" role="button">
										Indonesia <i class="ion-ios-arrow-down"></i>
									</a>
									<ul class="dropdown-list slide-down--item">
										<li><a href="#" onclick="bahasa()">ID</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle bg-primary">
				<div class="header-nav-wrapper">
					<div class="container">
						<div class="row align-items-center">
							<!-- Template Logo -->
							<div class="col-xl-3 col-lg-3 col-sm-4 order-lg-1 order-md-1">
								<div class="site-brand  text-center text-lg-left">
									<a href="{{ url('/') }}" class="brand-image">
										<img src="{{ url('images/template/logo.png') }}" alt="">
									</a>
								</div>
							</div>
							<!-- Catagory With Search -->
							<div class="col-xl-7 col-lg-6 col-md-12 order-lg-2 order-sm-3">
                            <form action="{{ url('/search') }}" class="category-widget" method="post">
                                @csrf
									<input type="text" name="search" placeholder="Cari hewan dan aksesoris...">
									<div class="search-form__group search-form__group--select">
										<select name="category " id="searchCategory" class="search-form__select nice-select">
											<option value="all">Semua Kategori</option>
												<option>Hewan</option>
												<option>Makanan</option>
                                                <option>Obat</option>
                                                <option>Vitamin</option>
												<option>Aksesoris Hewan</option>
												<option>Aksesoris Kandang</option>
												<option>Aksesoris Akuarium</option>
                                                <option>Market</option>
										</select>
									</div>
									<button class="search-submit" type="submit"><i class="fas fa-search"></i></button>
								</form>
							</div>
		
							<!-- Cart block-->
							<div class="col-xl-2 col-lg-3 col-sm-8 order-lg-3 order-sm-2">
								<div class="cart-widget-wrapper slide-down-wrapper">
									<div class="cart-widget border-0 white-color slide-down--btn">
										<div class="cart-icon">
											<i class="ion-bag"></i>
											<span class="cart-count-badge">
												0
											</span>
										</div>
										<div class="cart-text">
											<span class="d-block">Keranjang</span>
											{{-- <strong><span class="amount"><span class="currencySymbol">$</span>400.00</span></strong> --}}
										</div>
									</div>
									<div class="slide-down--item ">
										<div class="cart-widget-box">
                                            <ul class="cart-items">
                                                {{-- <li class="single-cart">
                                                    <a href="#" class="cart-product">
                                                        <div class="cart-product-img">
                                                            <img src="image/product/cart-product.jpg" alt="Selected Products">
                                                        </div>
                                                        <div class="product-details">
                                                            <h4 class="product-details--title"> Ras Neque Metus</h4>
                                                            <span class="product-details--price">1 x $120.00</span> 
                                                        </div>
                                                        <span class="cart-cross">x</span>
                                                    </a>
                                                </li>
                                                <li class="single-cart">
                                                    <div class="cart-product__subtotal">
                                                        <span class="subtotal--title">Subtotal</span>
                                                        <span class="subtotal--price">$200</span>
                                                    </div>
                                                </li>
                                                <li class="single-cart">
                                                    <div class="cart-buttons">
                                                        <a href="cart.html" class="btn btn-outlined">View Cart</a>
                                                        <a href="checkout.html" class="btn btn-outlined">Check Out</a>
                                                    </div>
                                                </li> --}}
                                            Anda harus <a href="{{ url('/login') }}"><b style="color:#ff7c00">Masuk</b></a> terlebih dahulu untuk melihat keranjang anda.
                                            </ul>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<div class="row align-items-center">
						<!-- Main Menu -->
						<div class="col-lg-8 col-xl-9 col-md-6 order-md-2 order-sm-1 order-2">
						
								<nav class="main-navigation">
                                    <!-- Mainmenu Start -->
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item">
                                            <a href="{{ url('/') }}" class          ="mainmenu__link">Home</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="{{ url('/store/hewan') }}" class="mainmenu__link">Hewan</a>
                                            <ul class="sub-menu">
                                            <li>
                                                    <a href="{{ url('/store/1') }}">Anjing</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/2') }}">Burung</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/3') }}">Hamster</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/4') }}">Ikan Hias</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/5') }}">Ikan Konsumsi</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/6') }}">Iguana</a>
                                                </li>
                                                
                                            
                                                <li><a href="{{ url('/store/7') }}">Kelinci</a></li>
                                                <li><a href="{{ url('/store/8') }}">Kucing</a></li>
                                                <li><a href="{{ url('/store/9') }}">Kura-Kura</a></li>
                                                <li><a href={{ url('/store/10') }}>Landak</a></li>
                                                <li><a href={{ url('/store/11') }}>Monyet</a></li>
                                                <li><a href={{ url('/store/12') }}>Tupai</a></li>
                                                </ul>
                                            </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                        <a href="{{ url('/store/konsumsi') }}" class="mainmenu__link">Makanan & Obat</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                            <a>Makanan</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('/store/13') }}">Makanan</a></li>
                                                <li><a href="{{ url('/store/14') }}">Minuman</a></li>
                                            </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                            <a>Obat</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('/store/15') }}">Obat</a></li>
                                                <li><a href="{{ url('/store/16') }}">Vitamin</a></li>
                                            </ul>
                                            </li>
                                        </ul>
                                        </>
                                        <li class="mainmenu__item menu-item-has-children ">
                                        <a href="{{ url('/store/aksesoris') }}" class="mainmenu__link">Aksesoris</a>
                                        <ul class="megamenu three-column">
                                            <li>
                                            <a>Hewan</a>
                                            <ul>
                                                <li><a href="{{ url('/store/30') }}">Baju</a></li>
                                                <li>
                                                    <a href="{{ url('/store/17') }}">Bola</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/18') }}">Kalung</a>
                                                </li>
                                                <li><a href="{{ url('/store/31') }}">Shampoo</a></li>
                                                <li>
                                                    <a href="{{ url('/store/19') }}">Sikat</a>
                                                </li>
                                            </ul>
                                            </li>
                                            <li>
                                            <a>Kandang</a>
                                            <ul>
                                                <li><a href="{{ url('/store/20') }}">Bowl</a></li>
                                                <li><a href="{{ url('/store/21') }}">Kandang</a></li>
                                                <li><a href="{{ url('/store/32') }}">Litter Box</a></li>
                                                <li><a href="{{ url('/store/22') }}">Pasir</a></li>
                                                <li><a href="{{ url('/store/33') }}">Sparepart</a></li>
                                            </ul>
                                            </li>
                                            <li>
                                            <a>Akuarium</a>
                                            <ul>
                                                <li><a href="{{ url('/store/23') }}">Akuarium</a></li>
                                                <li><a href="{{ url('/store/24') }}">Filter</a></li>
                                                <li><a href="{{ url('/store/25') }}">Hiasan</a></li>
                                                <li><a href="{{ url('/store/34') }}">Jaring</a></li>
                                                <li><a href="{{ url('/store/35') }}">Lampu</a></li>
                                            </ul>
                                            </li>
                                        </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="{{ url('/store/market') }}" class="mainmenu__link">Market</a>
                                            <ul class="sub-menu">
                                        <li>
                                            <a href="{{ url('/store/26') }}">Pet Store</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/store/27') }}">Pet Clinic</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/store/28') }}">Pet Grooming</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/store/29') }}">Pet Hotel</a>
                                        </li>
                                        </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item">
                                            <a href="{{ url('/tentang') }}" class="mainmenu__link">Tentang</a>
                                        </li>
                                        </ul>
                                    <!-- Mainmenu End -->
									</nav>
                                </div>
                                <!-- Call Widget -->
                                <div class="col-lg-4 col-xl-3 col-md-12 col-sm-7 order-sm-2 order-3">
                                    <div class="call-widget">
                                        <p>Bantuan 24/7 :  <br class="d-sm-none"><i class="icon ion-ios-telephone mt-2 mb-2"></i><span class="font-weight-mid">Customer Service</span></p>
                                    </div>
                                </div>
                                <!--  Mobile Menu -->
                                <div class="col-12 d-flex d-lg-none order-2 mobile-absolute-menu">
                                    <!-- Main Mobile Menu Start -->
                                    <div class="mobile-menu"></div>
                                    <!-- Main Mobile Menu End -->
                                </div>
                            </div>
                        </div>
                    </div>
			    <div class="fixed-header sticky-init sticky-color">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <!-- Sticky Logo Start -->
                                <a class="sticky-logo" href="{{ url('/') }}">
                                    <img src="{{ url('images/template/logo.png') }}" alt="logo">
                                </a>
                                <!-- Sticky Logo End -->
                            </div>
                            <div class="col-lg-9">
                                <!-- Sticky Mainmenu Start -->
                                <nav class="sticky-navigation white-color">
                                    <ul class="mainmenu sticky-menu">
                                        <li class="mainmenu__item menu-item">
                                            <a href="{{ url('/') }}" class="mainmenu__link">Home</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="{{ url('/store/hewan') }}" class="mainmenu__link">Hewan</a>
                                            <ul class="megamenu two-column">
                                            <li>
                                                <ul>
                                                <li>
                                                    <a href="{{ url('/store/1') }}">Anjing</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/2') }}">Burung</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/3') }}">Hamster</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/4') }}">Ikan Hias</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/5') }}">Ikan Konsumsi</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/6') }}">Iguana</a>
                                                </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                <li><a href="{{ url('/store/7') }}">Kelinci</a></li>
                                                <li><a href="{{ url('/store/8') }}">Kucing</a></li>
                                                <li><a href="{{ url('/store/9') }}">Kura-Kura</a></li>
                                                <li><a href="{{ url('/store/10') }}">Landak</a></li>
                                                <li><a href="{{ url('/store/11') }}">Monyet</a></li>
                                                <li><a href="{{ url('/store/12') }}">Tupai</a></li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="{{ url('/store/konsumsi') }}" class="mainmenu__link">Makanan & Obat</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                <a>Makanan</a>
                                                <ul class="sub-menu left-align">
                                                    <li><a href="{{ url('/store/13') }}">Makanan</a></li>
                                                    <li><a href="{{ url('/store/14') }}">Minuman</a></li>
                                                </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                <a>Obat</a>
                                                <ul class="sub-menu left-align">
                                                    <li><a href="{{ url('/store/15') }}">Obat</a></li>
                                                    <li><a href="{{ url('/store/16') }}">Vitamin</a></li>
                                                </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="{{ url('/store/52') }}" class="mainmenu__link">Aksesoris</a>
                                            <ul class="megamenu three-column">
                                            <li>
                                                <a>Hewan</a>
                                                <ul>
                                                <li><a href="{{ url('/store/30') }}">Baju</a></li>
                                                <li>
                                                    <a href="{{ url('/store/17') }}">Bola</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/store/18') }}">Kalung</a>
                                                </li>
                                                <li><a href="{{ url('/store/31') }}">Shampoo</a></li>
                                                <li>
                                                    <a href="{{ url('/store/19') }}">Sikat</a>
                                                </li>
                                                </ul>
                                            </li>
                                        <li>
                                            <a>Kandang</a>
                                            <ul>
                                            <li><a href="{{ url('/store/20') }}">Bowl</a></li>
                                            <li><a href="{{ url('/store/21') }}">Kandang</a></li>
                                            <li><a href="{{ url('/store/32') }}">Litter Box</a></li>
                                            <li><a href="{{ url('/store/22') }}">Pasir</a></li>
                                            <li><a href="{{ url('/store/33') }}">Sparepart</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Akuarium</a>
                                            <ul>
                                            <li><a href="{{ url('/store/23') }}">Akuarium</a></li>
                                            <li><a href="{{ url('/store/24') }}">Filter</a></li>
                                            <li><a href="{{ url('/store/25') }}">Hiasan</a></li>
                                            <li><a href="{{ url('/store/34') }}">Jaring</a></li>
                                            <li><a href="{{ url('/store/35') }}">Lampu</a></li>
                                            </ul>
                                        </li>
                                     </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children sticky-has-child">
                                        <a href="{{ url('/store/') }}" class="mainmenu__link">Market</a>
                                        <ul class="sub-menu">  
                                            <li>
                                            <a href="{{ url('/store/26') }}">Pet Store</a>
                                            </li>
                                            <li>
                                            <a href="{{ url('/store/27') }}">Pet Clinic</a>
                                            </li>
                                            <li>
                                            <a href="{{ url('/store/28') }}">Pet Grooming</a>
                                            </li>
                                            <li>
                                            <a href="{{ url('/store/29') }}">Pet Hotel</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item">
                                        <a href="{{ url('/tentang') }}" class="mainmenu__link">Tentang</a>
                                    </li>
                                    </ul>
                                    <div class="sticky-mobile-menu  d-lg-none">
                                        <span class="sticky-menu-btn"></span>
                                    </div>
                                </nav>
                            <!-- Sticky Mainmenu End -->
                            </div>
                        </div>
                     </div>
                </div>
        </header>