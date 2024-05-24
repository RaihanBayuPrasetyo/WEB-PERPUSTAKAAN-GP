<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo_perpus.png" />
    <!-- Bootstrap offline -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/style.css') }}">
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Hero Section -->
    <section id="hero">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent w-100">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logos/logo_perpus.png') }}" alt="" width="34"
                        class="d-inline-block align-text-top me-3">
                    Perpus Gp
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2 active">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('book') }}">Buku</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                    </ul>
                    <div>
                        <a class="btn btn-primary" href="{{ route('login') }}" role="button">Admin</a>
                        <a class="btn btn-secondary" href="{{ route('login-student') }}" role="button">Anggota</a>
                    </div>
                </div>
            </div>
        </nav>
        </nav>

        <!-- Tagline -->
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-sm-12 hero-tagline my-auto">
                    <h1>Perpustakaan berbasis
                        inklusi sosial
                    </h1>
                    <p>
                        <span class="fw-bold">Perpustakaan berbasis
                            inklusi sosial </span>hadir untuk mengedukasi masyarakat dalam
                        bidang literasi dan juga kegiatan sosial lainnya yang berdampak positif
                    </p>
                    
                    
                      
                </div>
            </div>
            <img src="{{ asset('images/backgrounds/Frame 15.png') }}"
                class="image-hero position-absolute end-0 bottom-0" alt="">
        </div>

        
    </section>

    @yield('content')

    <!-- Footer -->
    <footer style="margin-top: 200px">
        <div class="container-fluid d-flex align-items-center">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-7 text-lg-start text-center">
                        <img src="../public/assets/images/logos/logo_perpus 1.png" alt="">
                        <a href="#" class="text-decoration-none ms-3">perpusgp</a>
                    </div>
                    <div class="col-md-5 text-center text-lg-end ms-auto mt-lg-0 mt-3">
                        <a href="{{ route('home') }}" class="me-2">Beranda</a>
                        <a href="{{ route('book') }}" class="me-2">Buku</a>
                        <a href="{{ route('about') }}" class="me-2">About</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            Developed By Raihan Bayu Prasetyo
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
