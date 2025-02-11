@extends ('main.main')

@section('content')

<main class="container my-5">
    <div class="detail row">
        <!-- Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/shoes4.jpg') }}" width="350px" height="450px" alt="Ledina Strappy Heels Dusty Pink"
                class="img-fluid rounded">
        </div>
        <!-- Detail Produk -->
        <div class="col-md-6">
            <h2 class="fw-bold">Ledina Strappy Heels Dusty Pink</h2>
            <p class="text-muted">Miliki heels dengan aksen transparan yang dapat kamu padankan dengan berbagai macam outfit favoritmu!</p>
            <p class="fs-4 text-danger">Rp.449.000</p>
            <div class="mb-4">
                <label class="fw-semibold">Ukuran:</label>
                <div class="">
                    <input type="radio" class="btn-check me-2" id="size-s" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-s">36</label>

                    <input type="radio" class="btn-check" id="size-m" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-m">37</label>

                    <input type="radio" class="btn-check" id="size-l" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-l">38</label>

                    <input type="radio" class="btn-check" id="size-xl" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-xl">39</label>

                    <input type="radio" class="btn-check" id="size-xl" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-xl">40</label>
                </div>
            </div>
            <!-- Tombol Beli -->
            <button class="btn btn-dark w-100 p-2">BELI SEKARANG</button>
            <button class="btn border border-black btn-light w-100 mt-2 p-2 ">TAMBAH KE FAVORIT</button>
            <!-- Kategori -->
            <p class="mt-3 text-muted">Kategori: <span class="fw-semibold">Shoes</span></p>

            <!-- Spesifikasi & Perawatan -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item" border="1">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            SPESIFIKASI UKURAN
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Ukuran :<br>
                            <br>
                            36: 23,5 cm , Lebar : 7,6 cm<br>
                            37: 24 cm , Lebar : 7,7 cm<br>
                            38: 24,5 cm , Lebar : 7,8 cm<br>
                            39: 25 cm , Lebar : 7,9 cm<br>
                            40: 25,5 cm , Lebar : 8 cm <br>
                            Hak: 4 cm
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection