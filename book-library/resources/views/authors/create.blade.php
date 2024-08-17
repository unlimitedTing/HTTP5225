@extends('layouts.app')

@section('title', 'Add New Author')

@section('content')
    <h2>Add New Author</h2>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="bio">Bio:</label>
            <textarea name="bio"></textarea>
        </div>
        <button type="submit">Add Author</button>
    </form>
@endsection
