@extends ('main.main')

@section('content')

<main class="container my-5">
    <div class="detail row">
        <!-- Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/shoes1.jpg') }}" width="350px" height="450px"
                alt="Sofia Masana Mary Jane Flat Olive" class="img-fluid rounded">
        </div>
        <!-- Detail Produk -->
        <div class="col-md-6">
            <h2 class="fw-bold">Sofia Masana Mary Jane Flat Olive</h2>
            <p class="text-muted">Sepatu flat putih dengan aksen pita di bagian depan, memberikan kesan simpel namun
                manis. Ideal untuk digunakan sehari-hari dengan gaya kasual atau semi-formal.</p>
            <p class="fs-4 text-danger">Rp.299.000</p>
            <!-- Ukuran -->
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
                            36: 22,5 cm , Lebar : 7 cm<br>
                            37: 23 cm , Lebar : 7,2 cm<br>
                            38: 24 cm , Lebar : 7,4 cm<br>
                            39: 24,5 cm , Lebar : 7,6 cm<br>
                            40: 25 cm , Lebar : 7,8 cm
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection