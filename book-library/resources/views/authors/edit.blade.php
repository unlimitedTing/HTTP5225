@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')
    <div class="container">
        <h2 class="my-4">Edit Author</h2>

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

        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $author->name }}" required>
            </div>

            <div class="mb-3">
                <label for="bio" class="form-label">Bio:</label>
                <textarea name="bio" class="form-control" rows="4">{{ $author->bio }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Author</button>
        </form>
    </div>
@endsection
