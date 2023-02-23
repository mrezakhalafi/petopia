@include('templates/header')

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Store</li>
        <li class="breadcrumb-item" aria-current="page">Detail</li>
        <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
      </ol>
    </div>
  </nav>

  <main class="section-padding shop-page-section">
    <div class="container">

        <h2 class="heading-secondary">
            <strong>KERANJANG BELANJA</strong>
          </h2>

        <table class="table table-bordered mt-3" style="table-layout:fixed;">
            <thead class="text-center" style="background-color: #17a2b8; color:white">
                <th width="75">NO</th>
                <th></th>
                <th>PRODUK</th>
                <th>HARGA</th>
                <th width="100">JUMLAH</th>
                <th>TOTAL</th>
                <th width="100"></th>
            </thead>
            <tbody class="text-center align-items-center">
                <td class="align-middle">1</td>
                <td class="align-middle"><img src="{{'images/produk/produk13.jpeg'}}" style="width:125px; height: 125px"></td>
                <td class="align-middle">Kucing Oren Barbar</td>
                <td class="align-middle">Rp.450.000</td>
                <td class="align-middle"> <div class="count-input">
                    <input type="number" class="form-control text-center" value="1">
                  </div></td>
                <td class="align-middle text-orange">Rp.450.000</td>
                <td class="align-middle"><button style="width:75px" class="btn btn-sm btn-danger" onclick="hapus()"><i class="fas fa-trash-alt" aria-hidden="true"></i></button></td>
            </tbody>

        </table>

        <div class="row mt-4">
            <div class="col-md-7">
              <div class="card-body" style="border:1px solid #dee2e6">
                <div class="row">
                  <div class="col-md-4">
                    <b>Metode Pembayaran : </b>
                  </div>
                    <div class="col-md-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx" checked>
                        <label class="custom-control-label" for="customRadio1">Cash On Delivery</label>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-body mt-4" style="border:1px solid #dee2e6">
                <div class="row">
                  <div class="col-md-4">
                    <b>Metode Pengiriman : </b>
                  </div>
                    <div class="col-md-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="customRadio2" name="example2" value="customEx" checked>
                        <label class="custom-control-label" for="customRadio2">Seller</label>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-body mt-4" style="border:1px solid #dee2e6">
                <div class="row">
                  <div class="col-md-4">
                    <b>Estimasi Tiba : </b>
                  </div>
                    <div class="col-md-8">
                      1-2 Hari
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body" style="border:1px solid #dee2e6">
                    <h5>TOTAL KERANJANG</h5>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <p>Total Keranjang</p>
                            <p>Ongkos Kirim</p>
                            <p>TOTAL</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p class="text-orange">Rp.450.000</p>
                            <p class="text-orange">Rp.28.000</p>
                            <p class="text-orange">Rp.478.000</p>
                        </div>
                    <a style="width:100%" href="{{ url('/checkout') }}" ><button style="width: 95%; height:50px; background-color:#ff7c00 ;color:white" class="btn btn-lg m-3">LANJUT</button></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </main>

@include('templates/footer')