@extends ('main.main')

@section('content')
<div class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="create col-lg-6 mx-auto">
            <div class="bg-light p-4 rounded shadow">
                <h2 class="fs-1 fw-bold mb-4 text-center">Edit Product</h2>
                <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

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

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}"
                            placeholder="Enter product name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}"
                            placeholder="Enter product price" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" name="image" id="formFile">
                        <div class="mt-2">
                            <img src="{{ asset($product->image) }}" class="img-thumbnail" style="width: 150px;">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection