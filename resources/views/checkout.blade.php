@include('templates/header')

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Store</li>
        <li class="breadcrumb-item" aria-current="page">Detail</li>
        <li class="breadcrumb-item" aria-current="page">Keranjang</li>
        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
      </ol>
    </div>
  </nav>

  <main class="section-padding shop-page-section">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body" style="border:1px solid #dee2e6">

                    <h4 class="heading-secondary">
                        <strong>RINCIAN PENERIMA</strong>
                    </h4>
                    
                    <table class="table mt-4">
                        <tr>
                            <td>Nama Penerima : </td>
                            <td>Muhammad Reza Khalafi</td>
                        </tr>
                        <tr>
                            <td>Alamat : </td>
                            <td>Jl. Cipinang Elok 1 Blok.C No.13</td>
                        </tr>
                        <tr>
                            <td>Kecamatan : </td>
                            <td>Cipinang Muara</td>
                        </tr>

                        <tr>
                            <td>Keluarahan : </td>
                            <td>Jatinegara</td>
                        </tr>
                        <tr>
                            <td>Kota : </td>
                            <td>Jakarta Timur</td>
                        </tr>
                        <tr>
                            <td>Kode Pos : </td>
                            <td>13420</td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon : </td>
                            <td>081293291580</td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td>mrezakhalafi@yahoo.com</td>
                        </tr>
                    </table>

                    </div>
                </div>
        
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body" style="border:1px solid #dee2e6; background-color:#dee2e6">

                    <h4 class="heading-secondary">
                        <strong>RINCIAN TRANSAKSI</strong>
                    </h4>

                    <table class="table mt-4">
                        <tr>
                            <th>PRODUK</th>
                            <th>TOTAL</th>
                        </tr>
                        <tr>
                            <td>Kucing Oren Barbar x1</td>
                            <td class="text-orange">Rp.450.000</td>
                        </tr>
                        <tr>
                            <td>Kitten Pouch x1</td>
                            <td class="text-orange">Rp.0</td>
                        </tr>
                        <hr/>
                        <tr>
                            <td><b>ONGKOS KIRIM</b></td>
                            <td class="text-orange">Rp.28.000</td>
                        </tr>
                        <tr>
                            <td><b>METODE PEMBAYARAN</b></td>
                            <td class="text-orange">Cash On Delivery</td>
                        </tr>
                        <tr>
                            <td><b>TOTAL HARGA</b></td>
                            <td class="text-orange">Rp.478.000</td>
                        </tr>
                    </table>

                    <input type="checkbox" id="accept_terms" class="mb-0 mr-1 ml-3">
                    <label for="accept_terms" class="mb-0 font-weight-400">Saya menyetujui ketentuan & kebijakan yang dibuat oleh perusahaan.</label>

                    <a style="width:100%"" ><button onclick="checkout()" style="width: 95%; height:50px; background-color:#ff7c00 ;color:white" class="btn btn-lg m-3">KONFIRMASI</button></a>
            </div>
        </div>
    </div>
  </main>

@include('templates/footer')