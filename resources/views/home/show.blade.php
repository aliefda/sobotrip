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

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a href="javascript:history.back()" class="btn btn-link me-3"><i class="fas fa-arrow-left"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a href="{{ route('profile.show') }}" class="dropdown-item">Profile</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container detail-section">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('image/' . $destination->image) }}" alt="Main Image" class="main-image">
                <div class="thumbnail-images">
                    <img src="{{ asset('image/' . $destination->thumbnail_1) }}" alt="Thumbnail Image 1" class="thumbnail-image">
                    <img src="{{ asset('image/' . $destination->thumbnail_2) }}" alt="Thumbnail Image 2" class="thumbnail-image">
                    <img src="{{ asset('image/' . $destination->thumbnail_3) }}" alt="Thumbnail Image 3" class="thumbnail-image">
                </div>
            </div>
            <div class="col-md-8">
                <div class="description">
                    <h2>{{ $destination->title }}</h2>
                    <p>{{ $destination->description_1 }}</p>
                    <p>{{ $destination->description_2 }}</p>
                </div>
                <div class="rating-stars">
                    <form id="reviewForm" action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" id="rating" name="rating" value="0">
                        <input type="hidden" name="destination_id" value="{{ $destination->id }}">
                        <i class="far fa-star" onclick="rate(1)"></i>
                        <i class="far fa-star" onclick="rate(2)"></i>
                        <i class="far fa-star" onclick="rate(3)"></i>
                        <i class="far fa-star" onclick="rate(4)"></i>
                        <i class="far fa-star" onclick="rate(5)"></i>
                        <div class="comment-section mt-4">
                            <h3>Comments</h3>
                            <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Add a comment..."></textarea>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <iframe class="map-container" src="{{ $destination->maps_embed }}" allowfullscreen="" loading="lazy"></iframe>
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

<script>
    function rate(stars) {
        const starsElements = document.querySelectorAll('.rating-stars i');
        document.getElementById('rating').value = stars;
        starsElements.forEach((star, index) => {
            if(index < stars) {
                star.classList.add('fas');
                star.classList.remove('far');
            } else {
                star.classList.add('far');
                star.classList.remove('fas');
            }
        });
    }

    document.getElementById('reviewForm').addEventListener('submit', function(event) {
        const rating = document.getElementById('rating').value;
        if (rating == 0) {
            event.preventDefault();
            alert('Tolong, masukkan rating terlebih dahulu!');
        }
    });
</script>
</body>
</html>
