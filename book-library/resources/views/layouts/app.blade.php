<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Book Library')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Book Library</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('books.index') }}">Books</a></li>
                    <li><a href="{{ route('authors.index') }}">Authors</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; 2024 Book Library</p>
        </footer>
    </div>
</body>
</html>
