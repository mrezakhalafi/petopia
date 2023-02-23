@include('templates/header')

<main class="page-section mt-3">
    <div class="container text-center">
    <img src="{{ url('images/template/404.jpg' )}}">
        <p class="text-center">Maaf menu ini yang anda cari tidak tersedia.</p>
        <a href="{{ url('/') }}"<button class="btn btn-info mb-3">Homepage</button></a>

    </div>
</main>

@include('templates/footer')