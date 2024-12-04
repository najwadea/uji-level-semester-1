@extends ('main.main')

@section('content')

<body class="tops bg-light">
    <!-- Outwear -->
    <div class="container my-5" id="outwear">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear1')}}">
                        <img src="{{ asset('img/outwear1.jpg') }}" alt="outwear1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Mesha Pocket Blazer Brown</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.142.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear2')}}">
                        <img src="{{ asset('img/outwear2.jpg') }}" alt="outwear2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Jenna Knit Cardigan Grey</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.329.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear3')}}">
                        <img src="{{ asset('img/outwear3.jpg') }}" alt="outwear3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Women Coach The Good Outdoors Black</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.359.200</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear4')}}">
                        <img src="{{ asset('img/outwear4.jpg') }}" alt="outwear4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Miggy Knit Vest Rope Terracotta</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.299.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Product Card 5 -->
             <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear5')}}">
                        <img src="{{ asset('img/outwear5.jpg') }}" alt="outwear5"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Yesemia Textured Tie Kimono White</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.209.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear6')}}">
                        <img src="{{ asset('img/outwear6.jpg') }}" alt="outwear6"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Izabel Tie Kimono Brown</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.109.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear7')}}">
                        <img src="{{ asset('img/outwear7.jpg') }}" alt="outwear7"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Hanna Slim Fit Blazer Khaky</h5>
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
                    <a href="{{url('/outwear8')}}">
                        <img src="{{ asset('img/outwear8.jpg') }}" alt="outwear8"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Sofia Kahfia Oversize Outer Black</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp.139.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Outwear -->

</body>

@endsection