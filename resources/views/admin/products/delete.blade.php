@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Products</h1>

    @if ($errors->any())
        <div class="alrt alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('products.delete',
                        ['product' => $product->id]) }}">Delete Product</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('products.destroy', ['product' => $product->id]) }}">
        @method('DELETE')
        @csrf
        <div class="form-group">
            <label for="name">Product name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="productnamehelp"
                   value="{{ $product->name }}" disabled="disabled">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3"
                      class="form-control" disabled="disabled"> {{ 'description', $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp"
                   value="{{ $product->latest_price->price }}" disabled="disabled">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" name="category" id="pcategory" aria-describedby="categoryHelp"
                    value="{{ $product->category->name }}" disabled="disabled">
        </div>
        <button type="Submit" class="btn btn-primary">Delete</button>
    </form>
@endsection
