<!DOCTYPE html>
<html>
<head>
    <title>Book Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark p-3">
    <a class="navbar-brand text-white" href="{{ route('books.index') }}">
        Book Inventory
    </a>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>