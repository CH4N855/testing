@extends('layouts.app')

@section('content')
<h3>Edit Product</h3>
<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>
    <div class="mb-3">
        <label>Price ($)</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    <div class="mb-3">
        <label>Image</label><br>
        @if($product->image)
            <img src="{{ asset('storage/'.$product->image) }}" width="80" class="mb-2"><br>
        @endif
        <input type="file" name="image" class="form-control">
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
