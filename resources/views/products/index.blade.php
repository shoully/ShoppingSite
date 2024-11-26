@extends('layouts.app')
@section('content')
<form action="{{ route('products.store') }}" method="POST">
       @csrf
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="col-md-4">
            <label for="quantity" class="form-label">Quantity in stock</label>
            <input type="number" class="form-control" name="quantity" id="quantity" required>
        </div>
        <div class="col-md-4">
            <label for="price" class="form-label">Price per item</label>
            <input type="number" class="form-control" name="price" id="price" required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products->chunk(10) as $chunk)
                @foreach ($chunk as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->total_value }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</div>
@endsection