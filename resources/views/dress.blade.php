@extends ('main.main')

@section('content')

<body class="tops bg-light">
      
    <!-- Dresses -->
    <div class="container my-5" id="dresses">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses1')}}">
                        <img src="{{ asset('img/dress1.jpg') }}" alt="dresses1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">ISABELLE LACE DRESS BLACK</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.369.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses2')}}">
                        <img src="{{ asset('img/dress2.jpg') }}" alt="dresses2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Chic Asymmetric Black Dress</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.620.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses3')}}">
                        <img src="{{ asset('img/dress3.jpg') }}" alt="dresses3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Jalia Dress Brown</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.399.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses4')}}">
                        <img src="{{ asset('img/dress4.jpg') }}" alt="dresses4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Ethereal White Flare Dress</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.550.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses5')}}">
                        <img src="{{ asset('img/dress5.jpg') }}" alt="dresses5"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Bernadette Stripe Dress Sage Green</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.349.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses6')}}">
                        <img src="{{ asset('img/dress6.jpg') }}" alt="dresses6"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Elegant Ruffle Shoulder Dress</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.580.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses7')}}">
                        <img src="{{ asset('img/dress7.jpg') }}" alt="dresses7"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Leana Lace Dress Brown</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.399.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses8')}}">
                        <img src="{{ asset('img/dress8.jpg') }}" alt="dresses8"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Hyeri Asymmetrical Shirt Dress Cream</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.349.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dresses -->

  
</body>

@endsection