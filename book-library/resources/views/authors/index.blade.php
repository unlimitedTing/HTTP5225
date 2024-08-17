@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    <h2>Authors</h2>
    <a href="{{ route('authors.create') }}">Add New Author</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Bio</th>
                <th>Books</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->bio }}</td>
                    <td>
                        @foreach ($author->books as $book)
                            <p>{{ $book->title }}</p>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
