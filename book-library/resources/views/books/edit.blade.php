@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
    <h2>Edit Book</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ $book->title }}" required>
        </div>
        <div>
            <label for="author">Author:</label>
            <select name="author_id" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="year">Year:</label>
            <input type="number" name="year" value="{{ $book->year }}" required>
        </div>
        <div>
            <label for="genre">Genre:</label>
            <input type="text" name="genre" value="{{ $book->genre }}" required>
        </div>
        <div>
            <label for="rating">Rating:</label>
            <input type="number" step="0.1" name="rating" min="0" max="5" value="{{ $book->rating }}" required>
        </div>
        <button type="submit">Update Book</button>
    </form>
@endsection
