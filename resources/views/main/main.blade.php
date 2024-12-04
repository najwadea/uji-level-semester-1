<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
      <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    
</head>

<body id="home">
    <!--Start Nav -->
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top" data-bs-theme="light">
        <div class="container">
            <a class="navbar-brand judul" href="{{url('/')}}"><img src="{{ asset('img/logo.jpeg') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{url('/tops')}}" class="nav-link">Tops</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/bottoms')}}" class="nav-link">Bottoms</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/outwear')}}" class="nav-link">Outwears</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/dress')}}" class="nav-link">Dresses</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/shoes')}}" class="nav-link">Shoes</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-heart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Nav -->

    @yield('content')
    <!--Start Footer -->
    
    <footer class="footer bg-light py-5 shadow-sm">
        <div class="container">
            <div class="row">
                <!-- Logo and Address Section -->
                <div class="col-lg-2 col-md-6 mb-4 ms-6 ps-3">  
                    <img src="{{asset('img/logo eleganna.png')}}" alt="Eleganna Logo" width="160px" class="me-6">
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold">Eleganna Boutique</h5>
                    <p class="mt-3">
                        Jl. Kemang Raya No. 28, <br>
                        Kemang, Jakarta Selatan, 12730 <br>
                        Indonesia <br>
                        <strong>Telepon:</strong> (029) 4444-2023 <br>
                        <strong>Email:</strong> info@eleganna.com
                    </p>
                </div>

                <!--Services Section -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold">Layanan</h5>
                    <ul class="list-unstyled mt-3">
                        <li>Konsultasi Fashion</li>
                        <li>Custom Design</li>
                        <li>Pengiriman Cepat</li>
                        <li>Membersihkan Eksklusif</li>
                        <li>Fitting Room VIP</li>
                        <li>Alterasi Gratis</li>
                        <li>Acara Fashion</li>
                        <li>Pembungkusan Kado</li>
                    </ul>
                </div>

                <!--Owners Section -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold">Boutique Owner</h5>
                    <ul class="list-unstyled mt-3">
                        <li>Sherlyta Nurria Meisasi <small>(@sr.narmeey)</small></li>
                        <li>Najwa Nadia Dea Safira <small>(@qnanna_)</small></li>
                    </ul>
                    <div class="mt-2">
                        <a href="#" class="text-dark me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-dark me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-dark me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!--Information Section -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold">Informasi</h5>
                    <ul class="list-unstyled mt-3">
                        <li>About</li>
                        <li>Ketentuan Privasi</li>
                        <li>Kontak</li>
                    </ul>
                    <h5 class="fw-bold mt-4">Toko Online Kami</h5>
                    <ul class="list-unstyled mt-3">
                        <li>Eleganna Exclusive</li>
                        <li>Fashion House</li>
                    </ul>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col text-center">
                    <p class="mb-0">&copy; 2024 elegannaboutique.com | All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer -->

    <!--Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
</body>

</html>