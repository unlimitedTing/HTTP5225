@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    <div class="container">
        <h2 class="my-4">Authors</h2>

        @auth
        <a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Add New Author</a>
        @endauth

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead class="thead-light">
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
                            <ul>
                                @foreach ($author->books as $book)
                                    <li>{{ $book->title }}</li>
                                @endforeach
                            </ul>
                        </td>
                        @auth
                        <td>
                            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
