@extends ('main.main')

@section('content')

<body class="tops bg-light">

    <!-- Shoes -->
    <div class="container my-5" id="shoes">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes1')}}">
                        <img src="{{ asset('img/shoes1.jpg') }}" alt="shoes1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Masana Mary Jane Flat Olive</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.299.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes2')}}">
                        <img src="{{ asset('img/shoes2.jpg') }}" alt="shoes2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Mazata Tweed Flat Black</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.369.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes3')}}">
                        <img src="{{ asset('img/shoes3.jpg') }}" alt="shoes3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Falaya Basic Heels Cream</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.299.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes4')}}">
                        <img src="{{ asset('img/shoes4.jpg') }}" alt="shoes4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Ledina Strappy Heels Dusty Pink</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.449.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Product Card 5 -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes5')}}">
                        <img src="{{ asset('img/shoes5.jpg') }}" alt="shoes5"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Garcia Sandal Heels Nude</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.159.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Product Card 6 -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes6')}}">
                        <img src="{{ asset('img/shoes6.jpg') }}" alt="shoes6"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Jetta T Bar Heels Black</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.449.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Product Card 7 -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes7')}}">
                        <img src="{{ asset('img/shoes7.jpg') }}" alt="shoes7"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Mayela Basic Loafer Olive</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.349.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Product Card 8 -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes8')}}">
                        <img src="{{ asset('img/shoes8.jpg') }}" alt="shoes8"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Maika Mary Jane Flat Beige</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.299.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection