@include('templates/header')

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Store</li>
      </ol>
    </div>
  </nav>
  <main class="mt-4 mb-4">
    <div class="container">
      <div class="shop-toolbar mb--30">
        <div class="row align-items-center">
          <div class="col-3 col-md-3 col-lg-3">
            <!-- Product View Mode -->
            <div class="product-view-mode">
              <a href="#"  class="sortting-btn active" data-target="grid"><i class="fas fa-th"></i></a>          
              <a href="#" class="sortting-btn" data-target="list "><i class="fas fa-list"></i></a>
            </div>
          </div>
          <div class="col-9 col-md-9 col-lg-9">
            <div class="sorting-selection">
              <div class="row align-items-center pl-md-0 pr-md-0 no-gutters">
                <div class="col-sm-2 col-md-2 col-xl-2 d-flex align-items-center pl-2 mb-3">
                  <span>
                    Urutkan :
                  </span>
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2 d-flex align-items-center justify-content-md-end">
        
                  <button class="btn btn-sm ml-2 mb-2" style="border: 1px solid #e8e8e8; width:75%">Rating</button>
                  
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2 d-flex align-items-center ">
        
                  <button class="btn btn-sm ml-2 mr-2 mb-2" style="border: 1px solid #e8e8e8; width:75%">Terbaru</button>

                </div>
                <div class="col-sm-2 col-md-2 col-xl-2 d-flex align-items-center justify-content-md-end">
        
                  <select id="input-sort" class="form-control nice-select sort-select mb-2" style="display: none;">
                    <option value="" selected="selected">Lokasi</option>
                    <option value="">Jabodetabek</option>
                    <option value="">DKI Jakarta</option>
                    <option value="">Jawa Barat</option>
                    <option value="">Jawa Tengah</option>
                    <option value="">Jawa Timur</option>
                    <option value="">Sumatera Utara</option>
                    <option value="">Sumatera Selatan</option>
                    <option value="">Lampung</option>
                    <option value="">Bali</option>
                  </select>
                </div>
                
                <div class="col-sm-2 col-md-2 col-xl-2 d-flex align-items-center justify-content-md-end">
        
                  <select id="input-sort" class="form-control nice-select sort-select mb-2" style="display: none;">
                    <option value="" selected="selected">Harga</option>
                    <option value="">Harga (Rendah &gt; Tinggi)</option>
                    <option value="">Harga (Tinggi &gt; Rendah)</option>
                  </select>
                </div>
                <div class="col-sm-2 col-md-2 col-xl-2 text-sm-right mt-sm-0 mt-3 mb-2 pl-2">
                  <span>
                    @if($count==0)
                    0 dari 0 hasil
                    @elseif($count<=20)
                    1-{{$count}} dari {{$count}} hasil                   
                    @else
                    1-20 dari {{$count}} hasil            
                    @endif       
                  </span>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      <div class="shop-product-wrap grid with-pagination row border grid-four-column  mr-0 ml-0 no-gutters">
        @foreach($product as $row)
        <div class="col-lg-3 col-sm-6">
          <div class="pm-product text-center">
            <a href="{{ url('/detail/'.$row->id) }}" class="image" tabindex="0">
              <img src="../{{ $row->foto }}" alt="" style="height:252px">
            </a>
            <div class="content">
              <h3 class="font-weight-500"><a href="{{ url('/detail/'.$row->id) }}">{{ $row->nama }}</a></h3>
              <p>{{ $row->lokasi }}</p>
              <div class="price text-orange">
                <span>Rp. {{ number_format($row->harga,2) }}</span>
              </div>
              <div class="btn-block grid-btn">
                <a href="{{ url('/detail/'.$row->id) }}" class="btn btn-outlined btn-rounded btn-mid" tabindex="0">Detail</a>
              </div>
              <div class="card-list-content ">
                <div class="rating-widget mt--20">
                  <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                  <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                  <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                  <a href="#" class="single-rating"><i class="fas fa-star-half-alt"></i></a>
                  <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                </div>
                <div class="btn-block d-flex">
                  <a href="{{ url('/detail/'.$row->id) }}" class="btn btn-outlined btn-rounded btn-mid" tabindex="0">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="mt--30">
        <div class="pagination-widget">
      <div class="site-pagination">
          <a href="#" class="single-pagination">|&lt;</a>
          <a href="#" class="single-pagination">&lt;</a>
          <a href="#" class="single-pagination active">1</a>
          @if($count>20)
          <a href="#" class="single-pagination">2</a>
          @elseif($count>40)
          <a href="#" class="single-pagination">3</a>
          @elseif($count>60)
          <a href="#" class="single-pagination">4</a>
          @elseif($count>80)
          <a href="#" class="single-pagination">5</a>
          @elseif($count>100)
          <a href="#" class="single-pagination">6</a>
          @endif
          <a href="#" class="single-pagination">&gt;</a>
          <a href="#" class="single-pagination">&gt;|</a>
      </div>
  </div>
     
      </div>
    </div>
  </main>

@extends('templates/footer')