@extends('layouts.app')

@section('title', 'Add New Author')

@section('content')
    <div class="container">
        <h2 class="my-4">Add New Author</h2>

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

        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Bio:</label>
                <textarea name="bio" class="form-control" rows="4">{{ old('bio') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Author</button>
        </form>
    </div>
@endsection
