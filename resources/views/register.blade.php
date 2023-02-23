@include('templates/header');

<main class="page-section mt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30 my-auto">
                <!-- Sebelah Kiri --> 
            <img src="{{ url('images/template/dog.jpg') }}">  
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="{{ url('/register') }}" method="post">
                    @csrf
                    <h4 class="login-title">Register</h4>
                    <div class="login-form">
                        <div class="row">
                            <div class="col-md-12 col-12 mb--20">
                                <label>Nama Lengkap</label>
                                <input class="mb-0" type="text" name="nama">
                                @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 col-12 mb--20">
                                <label>Email</label>
                                <input class="mb-0" type="email" name="email">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 mb--20">
                                <label>Password</label>
                                <input class="mb-0" type="password" name="password">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 mb--20">
                                <label>Konfirmasi Password</label>
                                <input class="mb-0" type="password" name="konfirmasi_password">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 col-12 mb--20">
                                <label>Nomor Handphone</label>
                                <input class="mb-0" type="text" name="telepon">
                                @error('telepon')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb--20">
                            <i>Dengan mengklik Daftar, Anda menyetujui Ketentuan, Kebijakan Data dan Kebijakan Cookie kami. <a href="{{ url('/kebijakan') }}"><b>Selengkapnya baca disini</b></a></i>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center flex-wrap">
                                    <button type="submit" class="btn btn-black   mr-3">Register</button>
                                </div>
                                <p><a href="{{ url('/login') }}" class="pass-lost mt-3">Sudah mempunyai akun?</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@extends('templates/footer');