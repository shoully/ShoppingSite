@extends('layouts.app')

@section('content')
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('price', $product->name) }}">
                </div>
                <div class="col-md-4">
                    <label for="quantity" class="form-label">Quantity in stock</label>
                    <input type="number" class="form-control" name="quantity" value="{{ old('price', $product->quantity) }}">
                </div>
                <div class="col-md-4">
                    <label for="price" class="form-label">Price per item</label>
                    <input type="number" class="form-control" name="price" value="{{ old('price', $product->price) }}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </form>
@endsection