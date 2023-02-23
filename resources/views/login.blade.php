@include('templates/header');

<main class="page-section mt-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Sebelah Kiri --> 
            <img src="{{ url('images/template/dog.jpg') }}">  
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="{{ url('/login') }}" method="post">
                    @csrf
                    <h4 class="login-title">Login</h4>
                    <div class="login-form">
                        @if ($message = Session::get('alert'))
                        <div class="alert alert-warning alert-block">
                          <button type="button" class="close" data-dismiss="alert">×</button> 
                          <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                          <button type="button" class="close" data-dismiss="alert">×</button> 
                          <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12 col-12 mb--20">
                                <label>Email Address *</label>
                                <input class="mb-0" type="email" name="email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb--20">
                                <label>Password</label>
                                <input class="mb-0" type="password" name="password">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <!--<div class="col-12 mb--20">-->
                                <div class="col-12 mb--20 g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}">
                                </div>
                            <!--</div>-->
                            <div class="col-md-12">
                                <div class="d-flex align-items-center flex-wrap">
                                    <button type="submit" class="btn btn-black   mr-3">Login</button>
                                    <div class="d-inline-flex align-items-center">
                                        <input type="checkbox" id="accept_terms" class="mb-0 mr-1">
                                        <label for="accept_terms" class="mb-0 font-weight-400">Ingat saya</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><a href="{{ url('/forget') }}" class="pass-lost mt-3">Lupa password?</a></p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <p><a href="{{ url('/register') }}" class="pass-lost mt-3">Belum mempunyai akun?</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@extends('templates/footer');