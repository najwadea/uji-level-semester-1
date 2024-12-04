@extends ('main.main')

@section('content')

<main class="container my-5">
    <div class="detail row">
        <!-- Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/dress1.jpg') }}" width="350px" height="450px" alt="ISABELLE LACE DRESS BLACK"
                class="img-fluid rounded">
        </div>
        <!-- Detail Produk -->
        <div class="col-md-6">
            <h2 class="fw-bold">ISABELLE LACE DRESS BLACK</h2>
            <p class="text-muted">Miliki dress yang cocok kamu padankan dengan berbagai macam sepatu dan aksesoris! </p>
            <p class="fs-4 text-danger">Rp.369.000</p>
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
            <p class="mt-3 text-muted">Kategori: <span class="fw-semibold">Dresses</span></p>

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
                            Lebar Bahu : 54 cm<br>
                            Lingkar Dada : 100 cm<br>
                            Lingkar Pinggang : 106 cm<br>
                            Lingkar Pinggul : 118 cm<br>
                            Panjang : 115 cm<br>
                            <br>
                            Ukuran M<br>
                            Lebar Bahu : 56 cm<br>
                            Lingkar Dada : 106 cm<br>
                            Lingkar Pinggang : 112 cm<br>
                            Lingkar Pinggul : 124 cm<br>
                            Panjang : 118 cm<br>
                            <br>
                            Ukuran L<br>
                            Lebar Bahu : 58 cm<br>
                            Lingkar Dada : 112 cm<br>
                            Lingkar Pinggang : 118 cm<br>
                            Lingkar Pinggul : 128 cm<br>
                            Panjang : 120 cm<br>
                            <br>
                            Ukuran XL<br>
                            Lebar Bahu : 61 cm<br>
                            Lingkar Dada : 118 cm<br>
                            Lingkar Pinggang : 124 cm<br>
                            Lingkar Pinggul : 134 cm<br>
                            Panjang : 120 cm
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection