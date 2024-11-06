<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <h1>Lamaran Pekerjaan</h1>
        <nav>
            <a href="{{ route('applications.index') }}">Daftar Lamaran</a>
            <a href="{{ route('applications.create') }}">Tambah Lamaran</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2024 Lamaran Pekerjaan</p>
    </footer>
</body>
</html>

