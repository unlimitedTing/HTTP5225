@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
    <div class="container">
        <h2 class="my-4">Edit Book</h2>

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

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author:</label>
                <select name="author_id" class="form-select" required>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year:</label>
                <input type="number" name="year" class="form-control" value="{{ $book->year }}" required>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre:</label>
                <input type="text" name="genre" class="form-control" value="{{ $book->genre }}" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating:</label>
                <input type="number" step="0.1" name="rating" min="0" max="5" class="form-control" value="{{ $book->rating }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Book</button>
        </form>
    </div>
@endsection
