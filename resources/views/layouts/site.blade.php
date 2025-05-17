<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config("app.name")}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700;800&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-primary text-white d-none d-lg-flex wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="d-flex align-items-center">
            <a href="index.html">
                <h2 class="text-white fw-bold m-0">FarmTok</h2>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>20 Salia Street off Koroma Street
                    Kenema District, Sierra Leone</small>
                <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@farmtok.org</small>
                <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+232 34 12 59 21</small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="index.html" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">WELDORK</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="appoinment.html" class="dropdown-item">Appoinment</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="" class="btn btn-primary py-2 px-3">Get A Quote</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


@yield("page")



<!-- Newsletter Start -->
<div class="container-fluid newsletter mt-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="bg-white p-5 mb-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-uppercase mb-4">Newsletter</h1>
                    <div class="d-flex">
                        <i class="far fa-envelope-open fa-3x text-primary me-4"></i>
                        <p class="fs-5 fst-italic mb-0">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore lorem ipsum.</p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control border-0 bg-light" id="mail" placeholder="Your Email">
                        <label for="mail">Your Email</label>
                    </div>
                    <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Start -->
<!-- Footer Start -->
<div style="background-color: #FDBF04" class="container-fluid  footer py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Contact Us</h5>
                <p class="mb-2 text-white"><i class="fa fa-map-marker-alt text-white me-3"></i>20 Salia Street off Koroma Street
                    Kenema District, Sierra Leone</p>
                <p class="mb-2 text-white"><i class="fa fa-phone-alt text-white me-3"></i>+232 34 12 59 21</p>
                <p class="mb-2 text-white"><i class="fa fa-envelope text-white me-3"></i>info@farmtok.org</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light me-2" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light me-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light me-2" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-light me-2" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Quick Links</h5>
                <a class="btn btn-link text-white" href="">About Us</a>
                <a class="btn btn-link text-white" href="">Contact Us</a>
                <a class="btn btn-link text-white" href="">Our Services</a>
                <a class="btn btn-link text-white" href="">Terms & Condition</a>
                <a class="btn btn-link text-white" href="">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Business Hours</h5>
                <p class="text-uppercase mb-0">Monday - Friday</p>
                <p>09:00 am - 07:00 pm</p>
                <p class="text-uppercase mb-0">Saturday</p>
                <p>09:00 am - 12:00 pm</p>
                <p class="text-uppercase mb-0">Sunday</p>
                <p>Closed</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <img class="img-fluid w-100 rounded" src="/img/crest.png">

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid text-body copyright py-4 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-white">
                &copy; <a class="fw-semi-bold" href="#">FarmTok</a>, All Right Reserved.
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
        class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/counterup/counterup.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="/js/main.js"></script>
</body>
</html>
