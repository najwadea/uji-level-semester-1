@extends('main.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center" style="padding-top: 50px;"> <!-- Padding Top -->
        <div class="col-lg-10">
            <div class="bg-light p-4 rounded shadow">
                <h2 class="fs-1 fw-bold mb-4 text-center">List Product</h2>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <p class="text-end">
                    <a class="btn btn-dark px-4" href="{{ route('products.create') }}">Add Product</a>
                </p>

                <table class="table table-striped table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 150px;">Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>
                                    <img src="{{ asset($product->image) }}" class="img-thumbnail" style="width: 100px;" />
                                </td>

                                <td>{{ $product->name }}</td>
                                <td>Rp.{{ number_format($product->price, 3) }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    No record found!
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection