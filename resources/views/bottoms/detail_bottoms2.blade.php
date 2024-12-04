@extends ('main.main')

@section('content')

<main class="container my-5">
    <div class="detail row">
        <!-- Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/bottom2.jpg') }}" width="350px" height="450px" alt="Hiro Twill Skirt Sage Green"
                class="img-fluid rounded">
        </div>
        <!-- Detail Produk -->
        <div class="col-md-6">
            <h2 class="fw-bold">Hiro Twill Skirt Sage Green</h2>
            <p class="text-muted">Miliki rok cantik yang cocok kamu padankan dengan blouse simple serta hijab dan sepatu
                warna senada.</p>
            <p class="fs-4 text-danger">IDR 390.000</p>
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
            <p class="mt-3 text-muted">Kategori: <span class="fw-semibold">Bottoms</span></p>


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
                            Lingkar Pinggang : 70 cm<br>
                            Lingkar Pinggul : 100 cm<br>
                            Panjang : 80 cm<br>
                            <br>
                            Ukuran M <br>
                            Lingkar Pinggang : 72 cm<br>
                            Lingkar Pinggul : 104 cm<br>
                            Panjang : 82 cm<br>
                            <br>
                            Ukuran L<br>
                            Lingkar Pinggang : 74 cm<br>
                            Lingkar Pinggul : 106 cm<br>
                            Panjang : 84 cm<br>
                            <br>
                            Ukuran XL<br>
                            Lingkar Pinggang : 80 cm<br>
                            Lingkar Pinggul : 110 cm<br>
                            Panjang : 85 cmm<br>
                            Panjang : 63 cm
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection