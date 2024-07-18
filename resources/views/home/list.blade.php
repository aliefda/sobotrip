<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SoboTrip</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="/bootstrap/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/bootstrap/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 navbar-border">
        <div class="container-fluid">
            <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0">SoboTrip</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/destination" class="nav-item nav-link active">Destination</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                </div>
                <div class="navbar-nav">
                    @if(Auth::check())
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('profile.show') }}" class="dropdown-item">Profile</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('list') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search destination..." value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" id="destination-list wow fadeIn" data-wow-delay="0.1s">
            @foreach($destinations as $destination)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm" onclick="location.href='/destinations/{{$destination->id}}'">
                        <img src="/bootstrap/img/{{$destination->image }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $destination->title}}</h5>
                            <p class="card-text">{{ $destination->title_1 }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="/destinations/{{$destination->id}}" class="btn btn-primary btn-custom">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">SoboTrip</h4>
                    <p class="mb-2">&copy; 2024 All rights Reserved</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Contact Us</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Wonosobo, Jawa Tengah</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>SoboTrip@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Follow Us</h4>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/bootstrap/lib/wow/wow.min.js"></script>
    <script src="/bootstrap/lib/easing/easing.min.js"></script>
    <script src="/bootstrap/lib/waypoints/waypoints.min.js"></script>
    <script src="/bootstrap/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/bootstrap/js/main.js"></script>

</body>

</html>
