@extends ('main.main')

@section('content')

<body class="tops bg-light">

    <!-- Tops -->
    <div class="container my-5" id="tops">
        <a href="{{ url('/products/create') }}">
            <button type="button" class="btn btn-secondary mb-3 items-right">Add Product</button>
        </a>
        <div class="row g-4">
            <!-- Produk Lama -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{ url('/tops1') }}">
                        <img src="{{ asset('img/tops1.jpg') }}" alt="tops1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Nude Minimalist</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.240.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{ url('/tops2') }}">
                        <img src="{{ asset('img/tops2.jpg') }}" alt="tops2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Pleated Plum</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.260.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{ url('/tops3') }}">
                        <img src="{{ asset('img/tops3.jpg') }}" alt="tops3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Knit Beige Charm</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.270.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{ url('/tops4') }}">
                        <img src="{{ asset('img/tops4.jpg') }}" alt="tops4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Satin Sky</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.250.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{ url('/tops5') }}">
                        <img src="{{ asset('img/tops5.jpg') }}" alt="tops5"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Satin Ribbon Grace</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.280.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{ url('/tops6') }}">
                        <img src="{{ asset('img/tops6.jpg') }}" alt="tops6"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Striped Breeze</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.220.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{ url('/tops7') }}">
                        <img src="{{ asset('img/tops7.jpg') }}" alt="tops7"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Earthy Casual</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.230.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{ url('/tops8') }}">
                        <img src="{{ asset('img/tops8.jpg') }}" alt="tops8"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Vest Layered Elegance</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.200.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produk Baru -->
            @forelse ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <a href="{{ url('/tops/' . $product->id) }}">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"></a>
                        </a>
                        <div class="card-body">
                            <h5 class="ps-1">{{ $product->name }}</h5>
                            <div class="love d-flex justify-content-between">
                                <p class="price ps-1">Rp.{{ number_format($product->price, 3) }}</p>
                                <i class="fas fa-heart fav-icon m-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No new products found!</p>
                </div>
            @endforelse
        </div>
    </div>
    <!-- Tops -->
</body>

@endsection