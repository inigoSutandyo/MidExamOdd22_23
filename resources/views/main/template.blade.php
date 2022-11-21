<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giant</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body class="min-vh-100 d-flex flex-column justify-content-between">
    <div class="d-flex flex-column">
        <div class="d-flex justify-content-center p-3 bg-warning">
            <h3 class="m-0 text-light">
                Giant Book Supplier
            </h3>
        </div>
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container-fluid">
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item" href="#">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Publisher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div>
        @yield('content')
    </div>
    <div class="d-flex justify-content-center bg-primary">
        <div class="text-light p-2">
            &copy; Happy Book Store 2022
        </div>
    </div>
</body>

</html>
