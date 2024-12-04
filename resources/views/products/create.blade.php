@extends ('main.main')

@section('content')

<div class="container py-5">
    <div class="row g-5 align-items-center">
        <!-- Left Section: Form -->
        <div class="create col-lg-6 mx-auto">
            <div class="bg-light p-4 rounded shadow">
                <h2 class="fs-1 fw-bold mb-4 text-center">New Product</h2>
                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <h5>Whoops! There are some problems with your input:</h5>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                            placeholder="Enter product name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}"
                            placeholder="Enter product price" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" name="image" id="formFile" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
