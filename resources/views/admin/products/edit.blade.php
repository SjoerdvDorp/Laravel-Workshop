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
                <a class="nav-link active" href="{{ route('products.edit',
                        ['product' => $product->id]) }}">Edit Product</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Product name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="productnamehelp"
                   value="{{ old('name', $product->name) }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3"
                      class="form-control"> {{ old('description', $product->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp"
                   value="{{ old('price', $product->latest_price->price) }}">
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                    @if(old('category_id',$product->category_id) == $category->id)
                    selected
                        @endif
                    >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="Submit" class="btn btn-primary">Update</button>
    </form>

@endsection
