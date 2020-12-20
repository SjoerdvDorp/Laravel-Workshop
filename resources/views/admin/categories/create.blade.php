@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Categories</h1>

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
                <a class="nav-link" href="{{ route('categories.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('categories.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Category name</label>
            <input type="text" name="name" class="form-control" id="name"
                   aria-describedby="categorienameHelp" placeholder="Enter Category name">
        </div>
        <button type="Submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
