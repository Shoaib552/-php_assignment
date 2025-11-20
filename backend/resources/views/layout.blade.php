<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'My CMS Website' }}</title>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $meta_description ?? '' }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">My CMS</a>

        <div>
            <a class="nav-link d-inline-block text-white" href="/blog">Blog</a>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer class="text-center mt-5 py-4 bg-light">
    <p class="m-0">© {{ date('Y') }} My CMS Website</p>
</footer>

</body>
</html>
