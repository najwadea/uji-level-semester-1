@extends ('main.main')

@section('content')

<main class="container my-5">
    <div class="detail row">
        <!-- Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/outwear3.jpg') }}" width="350px" height="450px"
                alt="Women Coach The Good Outdoors Black" class="img-fluid rounded">
        </div>
        <!-- Detail Produk -->
        <div class="col-md-6">
            <h2 class="fw-bold">Women Coach The Good Outdoors Black</h2>
            <p class="text-muted">Tampil gaya dengan jaket yang memiliki print gambar menarik ini, cocok dipadukan
                dengan dalaman kaos putih, celana jeans dan sneakers. </p>
            <p class="fs-4 text-danger">Rp.359.200</p>
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
                </div>
            </div>
            <!-- Tombol Beli -->
            <button class="btn btn-dark w-100 p-2">BELI SEKARANG</button>
            <button class="btn border border-black btn-light w-100 mt-2 p-2 ">TAMBAH KE FAVORIT</button>
            <!-- Kategori -->
            <p class="mt-3 text-muted">Kategori: <span class="fw-semibold">Outwear</span></p>

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
                            Lebar Bahu : 44 cm<br>
                            Lingkar Dada : 102 cm<br>
                            Panjang Tangan : 56 cm<br>
                            Lingkar Lengan : 44 cm<br>
                            Lingkar Pinggang : 102 cm<br>
                            Panjang : 68 cm<br>
                            <br>
                            Ukuran M<br>
                            Lebar Bahu : 46 cm<br>
                            Lingkar Dada : 106 cm<br>
                            Panjang Tangan : 57 cm<br>
                            Lingkar Lengan : 46 cm<br>
                            Lingkar Pinggang : 106 cm<br>
                            Panjang : 70 cm<br>
                            <br>
                            Ukuran L<br>
                            Lebar Bahu : 48 cm<br>
                            Lingkar Dada : 110 cm<br>
                            Panjang Tangan : 57 cm<br>
                            Lingkar Lengan : 48 cm<br>
                            Lingkar Pinggang : 110 cm<br>
                            Panjang : 72 cm
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection