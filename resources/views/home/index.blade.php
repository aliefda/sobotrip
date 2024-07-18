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
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/list" class="nav-item nav-link">Destination</a>
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
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="nav-item nav-link btn btn-primary px-4">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $index => $slider)
                <div class="carousel-item {{$index === 0 ? 'active' : '' }}">
                    <img class="w-100" src="/bootstrap/img/{{$slider->image}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">{{$slider->description}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($sliders as $index => $slider)
                <div class="carousel-item {{$index === 1}}">
                    <img class="w-100" src="/bootstrap/img/{{$slider->image}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">{{$slider->description}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-train text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Keindahan Alam</h5>
                                <span>Pengalaman baru yang memberikan ketenangan jiwa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Ragam Budaya</h5>
                                <span>Budaya yang mencerminkan adat sekitar</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-hotel text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Kenyamanan Wisata</h5>
                                <span>Berbagai fasilitas terdekat yang tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popular_places_area wow fadeInUp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center">
                        <h1 class="display-6 mb-4">Rekomendasi Pilihan</h1>
                        <p>
                            Temukan petualangan terbaik Anda dengan rekomendasi wisata pilihan kami. Jelajahi keindahan alam dan budaya yang menakjubkan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($destinations as $index => $destination)
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4 shadow-sm" onclick="location.href='/destinations/{{$destination->id}}'">
                        <img src="/bootstrap/img/{{$destination->image}}" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">{{$destination->title}}</h5>
                            <p class="card-text">{{$destination->title_1}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/destinations/{{$destination->id}}" class="btn btn-sm btn-custom">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.5s">
        <div class="container">
            <div class="h-100 bg-light rounded p-5">
                <h1 class="text-center mb-4">Apa Kata Mereka</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-3" src="bootstrap/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                            <p class="fs-5">"Pengalaman yang luar biasa! Tempat wisata yang menakjubkan."</p>
                            <hr class="w-25 mx-auto">
                            <h6 class="mb-0">Ahmad</h6>
                            <span>Traveler</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-3" src="bootstrap/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                            <p class="fs-5">"Liburan terbaik yang pernah saya alami! Tempat ini benar-benar indah."</p>
                            <hr class="w-25 mx-auto">
                            <h6 class="mb-0">Abdul</h6>
                            <span>Traveler</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-3" src="bootstrap/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                            <p class="fs-5">"Fasilitas yang baik dan tempat yang sangat indah. Saya pasti akan kembali lagi!"</p>
                            <hr class="w-25 mx-auto">
                            <h6 class="mb-0">Puspa</h6>
                            <span>Traveler</span>
                        </div>
                    </div>
                </div>
            </div>
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