@extends ('main.main')

@section('content')

<main class="container my-5">
    <div class="detail row">
        <!-- Gambar -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/outwear4.jpg') }}" width="350px" height="450px"
                alt="Sofia Miggy Knit Vest Rope Terracotta" class="img-fluid rounded">
        </div>
        <!-- Detail Produk -->
        <div class="col-md-6">
            <h2 class="fw-bold">Sofia Miggy Knit Vest Rope Terracotta</h2>
            <p class="text-muted">Luaran dengan model menarik yang cocok dipadankan dengan dalaman tank top serta celana
                palazzo dan mules.</p>
            <p class="fs-4 text-danger">Rp.299.000</p>
            <!-- Ukuran -->
            <div class="mb-4">
                <label class="fw-semibold">Ukuran:</label>
                <div class="">
                    <input type="radio" class="btn-check me-2" id="size-s" name="ukuran" autocomplete="off">
                    <label class="btn btn-outline-dark" for="size-s">ONE SIZE</label>
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
                            Ukuran: <br>
                            Lebar Bahu : 43 cm<br>
                            Lingkar Dada : 96 cm<br>
                            Lingkar Pinggang : 92 cm<br>
                            Panjang : 55-63 cm
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection