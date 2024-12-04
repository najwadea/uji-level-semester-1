@extends ('main.main')

@section('content')

<!-- Swiper -->
<section>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{asset('img/cr1.svg')}}" whidth="auto" alt="cr3">
            </div>
            <div class="swiper-slide">
                <img src="{{asset('img/cr2.svg')}}" whidth="auto" alt="cr2">
            </div>
            <div class="swiper-slide">
                <img src="{{asset('img/cr3.svg')}}" whidth="auto" alt="cr3">
            </div>
            <div class="swiper-slide">
                <img src="{{asset('img/cr4.svg')}}" whidth="auto" alt="cr4">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        on: {
            autoplayTimeLeft(s, time, progress) {
                progressCircle.style.setProperty("--progress", 1 - progress);
                progressContent.textContent = `${Math.ceil(time / 1000)}s`;
            }
        }
    });
</script>

<section>
    <div class="container h-100">
        <div class="row align-middle">
            <div class="container">
                <!-- Title -->
                <div class="section-title">
                    <h1><b><span>Our Products</span></b></h1>
                </div>
                <!-- Subtitle -->
                <div class="section-subtitle">
                    <h3>Discover the elegance we offer</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href="{{url('/tops')}}" class="nav-link">
                    <div class="card gr-1">
                        <img src="{{asset('img/atasan.jpg')}}" whidth="auto" alt="cr3">
                        <div class="txt">
                            <h1>TOPS</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href="{{url('/bottoms')}}" class="nav-link">
                    <div class="card gr-2">
                        <img src="{{asset('img/rok.jpg')}}" whidth="auto" alt="cr3">
                        <div class="txt">
                            <h1>BOTTOMS</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href="{{url('/outwear')}}" class="nav-link">
                    <div class="card gr-3">
                        <img src="{{asset('img/outwear.jpg')}}" whidth="auto" alt="cr3">
                        <div class="txt">
                            <h1>OUTWEAR</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row align-middle justify-between">
            <div class="col-md-6 col-lg-2 column">
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href="{{url('/dress')}}" class="nav-link">
                    <div class="card gr-1">
                        <img src="{{asset('img/dress.jpg')}}" whidth="auto" alt="cr3">
                        <div class="txt">
                            <h1>DRESSES</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
                <a href="{{url('/shoes')}}" class="nav-link">
                    <div class="card gr-2">
                        <img src="{{asset('img/shoes.jpg')}}" whidth="auto" alt="cr3">
                        <div class="txt">
                            <h1>SHOES</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-2 column">
            </div>
        </div>
</section>


<section class="about pt-5">
    <div class="container">
        <div class="store-section">
            <div class="store-image-1">
                <a href="{{url('/about')}}"><img src="{{asset('img/store.png')}}" whidth="auto" alt="store"></a>
            </div>
        </div>
    </div>
</section>


<div class="container py-5">
    <div class="row g-5 align-items-center">
        <!-- Left Section: Form -->
        <div class="col-lg-6">
            <div class="bg-light p-4 rounded shadow">
                <h2 class="fs-1 fw-bold mb-4">Send Us A Message</h2>
                @if(session('success'))
                    <div class="alert alert-dark alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Preferred Method of Communication</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="communication" id="emailComm"
                                    value="Email" required>
                                <label class="form-check-label" for="emailComm">Email</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="communication" id="phoneComm"
                                    value="Phone" required>
                                <label class="form-check-label" for="phoneComm">Phone</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4"
                            placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Send</button>
                </form>
            </div>
        </div>
        <!-- Right Section: Image -->
        <div class="col-lg-6">
            <div class="text-center">
                <img src="{{asset('img/contact.svg')}}" alt="Contact Us" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>


@endsection