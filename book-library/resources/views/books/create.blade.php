@extends('layouts.app')

@section('title', 'Add New Book')

@section('content')
    <div class="container">
        <h2 class="my-4">Add New Book</h2>

        {{-- Show any validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author:</label>
                <select name="author_id" class="form-select" required>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year:</label>
                <input type="number" name="year" class="form-control" value="{{ old('year') }}" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre:</label>
                <input type="text" name="genre" class="form-control" value="{{ old('genre') }}" required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating:</label>
                <input type="number" step="0.1" name="rating" min="0" max="5" class="form-control" value="{{ old('rating') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Book</button>
        </form>
    </div>
@endsection
