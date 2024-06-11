<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/images.css">
    <link rel="stylesheet" href="css/menu.css">

</head>
<body class="bg-dark text-white">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2 fixed-menu">
    <div class="container-fluid">
        <a href="/golovna" class="navbar-brand d-flex align-items-center">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 text-white">КіноМагія</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="/golovna" class="nav-link active" aria-current="page">Головна</a></li>
                <li class="nav-item"><a href="/zhanry" class="nav-link">Жанри</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Пропозиції</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Допомога</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Інформація</a></li>
            </ul>
            <form class="d-flex me-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link bg-warning text-dark px-2">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('base_menu')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
