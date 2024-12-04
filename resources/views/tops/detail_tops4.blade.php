@extends ('main.main')

@section('content')

<main class="container my-5">
    <div class="detail row">
        <!-- Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/tops4.jpg') }}" width="350px" height="450px" alt="Blouse Satin Sky"
                class="img-fluid rounded">
        </div>
        <!-- Detail Produk -->
        <div class="col-md-6">
            <h2 class="fw-bold">Blouse Satin Sky</h2>
            <p class="text-muted">Atasan dengan model menarik yang cocok kamu padankan dengan celana slim fit dan mules.
            </p>
            <p class="fs-4 text-danger">Rp.250.000</p>
            <!-- Ukuran -->
            <div class="mb-4">
                <label class="fw-semibold">Ukuran:</label>
                <div class="">
                    <input type="radio" class="btn-check me-2" id="size-s" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-s">S</label>

                    <input type="radio" class="btn-check" id="size-m" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-m">M</label>

                    <input type="radio" class="btn-check" id="size-l" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-l">L</label>

                    <input type="radio" class="btn-check" id="size-xl" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-xl">XL</label>
                </div>
            </div>
            <!-- Tombol Beli -->
            <button class="btn btn-dark w-100 p-2">BELI SEKARANG</button>
            <button class="btn border border-black btn-light w-100 mt-2 p-2 ">TAMBAH KE FAVORIT</button>
            <!-- Kategori -->
            <p class="mt-3 text-muted">Kategori: <span class="fw-semibold">Tops</span></p>

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
                            Ukuran S <br>
                            Lebar Bahu : 38 cm<br>
                            Lingkar Dada : 100 cm<br>
                            Panjang Tangan : 56 cm<br>
                            Lingkar Lengan : 32 cm<br>
                            Lingkar Pinggang : 116 cm<br>
                            Panjang : 66-70 cm<br>
                            <br>
                            Ukuran M<br>
                            Lebar Bahu : 40 cm<br>
                            Lingkar Dada : 104 cm<br>
                            Panjang Tangan : 56 cm<br>
                            Lingkar Lengan : 34 cm<br>
                            Lingkar Pinggang : 120 cm<br>
                            Panjang : 67-71 cm<br>
                            <br>
                            Ukuran L<br>
                            Lebar Bahu : 43 cm<br>
                            Lingkar Dada : 110 cm<br>
                            Panjang Tangan : 57 cm<br>
                            Lingkar Lengan : 36 cm<br>
                            Lingkar Pinggang : 126 cm<br>
                            Panjang : 68-72 cm<br>
                            <br>
                            Ukuran XL<br>
                            Lebar Bahu : 45 cm<br>
                            Lingkar Dada : 114 cm<br>
                            Panjang Tangan : 58 cm<br>
                            Lingkar Lengan : 38 cm<br>
                            Lingkar Pinggang : 130 cm<br>
                            Panjang : 70-74 cm<br>
                            <br>
                            Model pakai ukuran : M<br>
                            <br>
                            Tinggi Model : 173 cm
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection