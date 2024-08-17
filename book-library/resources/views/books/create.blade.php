@extends('layouts.app')

@section('title', 'Add New Book')

@section('content')
    <h2>Add New Book</h2>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label for="author">Author:</label>
            <select name="author_id" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="year">Year:</label>
            <input type="number" name="year" required>
        </div>
        <div>
            <label for="genre">Genre:</label>
            <input type="text" name="genre" required>
        </div>
        <div>
            <label for="rating">Rating:</label>
            <input type="number" step="0.1" name="rating" min="0" max="5" required>
        </div>
        <button type="submit">Add Book</button>
    </form>
@endsection
