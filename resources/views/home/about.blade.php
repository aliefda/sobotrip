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
                  <a href="/list" class="nav-item nav-link">Destination</a>
                  <a href="/about" class="nav-item nav-link active">About</a>
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
                @endif
              </div>
          </div>
      </div>
  </nav>

  <div class="container about-section">
      <div class="row">
          <div class="col-md-8">
              <img src="/bootstrap/img/candiyasan-1.jpg" alt="About Image">
              <div class="about-description">
                  <h2>About SoboTrip</h2>
                  <p>
                      SoboTrip adalah sebuah platform yang dirancang untuk membantu wisatawan menemukan destinasi wisata terbaik di Wonosobo dan sekitarnya. Dengan berbagai fitur yang kami sediakan, pengguna dapat dengan mudah mencari, menemukan, dan menjelajahi berbagai tempat menarik yang ada di daerah ini. Kami berkomitmen untuk memberikan informasi yang akurat dan up-to-date agar pengalaman liburan Anda semakin menyenangkan.
                  </p>
              </div>
          </div>
          <div class="col-md-4">
              <iframe
                  class="map-container"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63355.49227358437!2d109.89175956824788!3d-7.3733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fec43d77bb3c9%3A0xe3038d41bcae2e9a!2sWonosobo%2C%20Wonosobo%20Sub-District%2C%20Wonosobo%20Regency%2C%20Central%20Java%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1624296181498!5m2!1sen!2sus"
                  allowfullscreen=""
                  loading="lazy">
              </iframe>
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