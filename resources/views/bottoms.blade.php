@extends ('main.main')

@section('content')

<body class="tops bg-light">
    
    <!-- Bottoms -->
    <div class="container my-5" id="bottoms">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms1')}}">
                        <img src="{{ asset('img/bottom1.jpg') }}" alt="bottom1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Raine Cargo Skirt Milo</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.229.000<i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms2')}}">
                        <img src="{{ asset('img/bottom2.jpg') }}" alt="bottom2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Hiro Twill Skirt Sage Green</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.229.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms3')}}">
                        <img src="{{ asset('img/bottom3.jpg') }}" alt="bottom3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Raelyn Tie Cargo Skirt Black</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.229.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms4')}}">
                        <img src="{{ asset('img/bottom4.jpg') }}" alt="bottom4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Dami High Waist Overlap Skirt grey</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.263.200</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Product Card 5 -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms5')}}">
                        <img src="{{ asset('img/bottom5.jpg') }}" alt="bottom5"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Mulcia Linen Cullote Brown</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.109.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Product Card 6 -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms6')}}">
                        <img src="{{ asset('img/bottom6.jpg') }}" alt="bottom6"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Raga Ombre Denim Pants Blue</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.399.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Product Card 7 -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms7')}}">
                        <img src="{{ asset('img/bottom7.jpg') }}" alt="bottom7"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Rara Straight Denim Pants Blue</h5>
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
                    <a href="{{url('/bottoms8')}}">
                        <img src="{{ asset('img/bottom8.jpg') }}" alt="bottom8"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Jez Straight Wide Pants Black Oversized</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.139.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottoms -->

</body>

@endsection