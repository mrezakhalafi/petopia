<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-footer contact-block">
                    <h3 class="footer-title">Kontak</h3>
                    <div class="single-footer-content">
                        <p class="text-italic">Anda dapat menghubungi melalui sosial media atau chat WA berikut.</p>
                        <p class="font-weight-500 text-white"><span class="d-block">@MRezaKhalafi</span>
                        087883735365</p>
                        <p class="social-icons">
                            <a href="https://www.facebook.com/mrezakhalafi"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/mrezakhalafi"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/mrezakhalafi"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/m-reza-khalafi-45984a106"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.youtube.com/channel/UCWg0Os7vzQYnwQo47eMDJSA"><i class="fab fa-youtube"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 align-center">
                <div class="single-footer contact-block">
                    <h3 class="footer-title">Informasi</h3>
                    <div class="single-footer-content">
                    <ul class="footer-list">
                        <li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
                        <li><a href="{{ url('/seller') }}">Cara Menjadi Seller</a></li>
                        <li><a href="{{ url('/kebijakan') }}">Ketentuan & Kebijakan</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-footer contact-block">
                    <h3 class="footer-title">LANGGANAN</h3>
                    <div class="single-footer-content">
                        <p>
                            Langganan untuk menerima email tentang informasi produk terbaru dari kami secara gratis.
                        </p>
                        <div class="pt-2">
                            <div class="input-box-with-icon">
                                <input type="text" placeholder="Masukan Email">
                                <button onclick="langganan()"><i class="fas fa-envelope"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>Copyright © 20XX <a href="{{ url('/') }}">PETOPIA</a> | Designed by PETMARK | Startup Created by Muhammad Reza Khalafi.</p>
    </div>
    </footer>
</div>
<script src="{{ url('js/plugins.js') }}"></script>
<script src="{{ url('js/ajax-mail.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>

<script src="https://www.google.com/recaptcha/api.js"></script>

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<script>
    function bahasa(){
      swal("Berhasil!", "Bahasa telah dirubah menjadi Bahasa Indonesia", "success");
    };

    function langganan(){
      swal("Gagal!", "Maaf, fitur ini belum tersedia", "error");
    };

    function keranjang(){
      swal("Berhasil!", "Produk berhasil ditambahkan ke dalam keranjang", "success");
    };

    function hapus(){
      swal("Berhasil!", "Produk berhasil dihapus dari keranjang", "success");
    };

    function checkout(){
      swal("Gagal!", "Maaf, startup ini belum dibuka untuk umum", "error");
    };

    function logout(){
        swal({
        title: 'Apakah anda ingin logout?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!',
        cancelButtonText: 'Tidak'
            }).then(function (result) {
            if (result.value) {
                window.location.href = "{{URL::to('/logout')}}"
            } else {
                // handle cancel
            }
            })
    };
</script>

</body>
</html>