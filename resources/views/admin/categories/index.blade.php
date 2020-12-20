@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Categories</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session('wrong'))
        <div class="alert alert-danger">
            {{ session('wrong') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('categories.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table .table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
            <th scope="col">Category details</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td scope="now">{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td><a href="{{ route('categories.show', ['category' => $category->id]) }}">Details</a></td>
                <td><a href="{{ route('categories.edit', ['category' => $category->id]) }}">Edit</a></td>
                <td><a href="{{ route('categories.delete', ['category' => $category->id]) }}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
