@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Products</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('products.show',
                        ['product' => $product->id]) }}">Product Details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Product
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $product->name }}</h2>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text">Categorie: {{ $product->category->name }}</p>
            <p class="card-text">Prices</p>
            <table class="table .table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Prijs</th>
                    <th scope="col">Ingangsitem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($product->price->sortByDesc('effdate') as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->effdate }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
