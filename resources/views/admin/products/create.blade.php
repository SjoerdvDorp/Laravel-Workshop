@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Products</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
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
                <a class="nav-link active" href="{{ route('products.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label for="name" >Productname</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp"
                   placeholder="Enter productname" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{old('description')}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp"
                   placeholder="Enter price" value="{{old('price')}}">
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                    @if( old('category_id') == $category->id)
                        selected
                        @endif
                    >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="Submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

