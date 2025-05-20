<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield("header")

    <title>{{config("app.name")}} . {{ucwords(request()->route()->getName())}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700;800&display=swap"
          rel="stylesheet">
    <link rel="icon" href="/img/crest.png">

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
            <a href="/">
                <h2 class="text-white fw-bold m-0">FarmTok</h2>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>20 Salia Street off Koroma Street
                    Kenema District, Sierra Leone</small>
                <small class="ms-4"><i class="fa fa-envelope me-3"></i>
                    <a href="mailto:info@farmtok.org" class="text-white">info@farmtok.org</a>
                </small>
                <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>
                    <a class="text-white" href="tel:+232 34 12 59 21">+232 34 12 59 21</a>
                </small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-primary ms-2 rounded" target="_blank"
                       href="https://www.instagram.com/farmtok/"><i
                            class="fab fa-instagram"></i></a>

                    <a class="btn btn-sm-square btn-light text-primary ms-2 rounded" target="_blank"
                       href="https://www.facebook.com/share/16TN3NGVBS"><i
                            class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-sm-square btn-light text-primary ms-2 rounded" href="https://www.linkedin.com/in/farm-tok-consultancy-71836a326/" target="_blank"><i
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
            <a href="/" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">FarmTok</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{route("home")}}"
                       class="nav-item nav-link {{request()->route()->getName()=="home" ? 'active': ''}}">Home</a>
                    <a href="{{route("about")}}"
                       class="nav-item nav-link {{request()->route()->getName()=="about" ? 'active': ''}}">About</a>
                    <a href="{{route("contact")}}"
                       class="nav-item nav-link {{request()->route()->getName()=="contact" ? 'active': ''}}">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    {{--                    <a href="" class="btn btn-primary py-2 px-3">Get A Quote</a>--}}
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


@yield("page")


<div class="container-fluid bg-info mt-6 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="text-center text-white">Success stories</h1>
            </div>
        </div>
        <div class="row gx-0">

            <div class="col-lg-6">
                <div class="card rounded border-0 m-2" style="border-right:5px solid cyan!important;">
                    <div class="row">

                        <div class="col-lg-5">
                            <img src="/img/green.jpeg" style="border-right:15px solid cyan!important;"
                                 class="rounded img-fluid">
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body">
                                <h4>GREEN ENERGY CHARCOAL Briquette – WASTE TO WEALTH</h4>
                                Using agriculture waste such as cassava peel, rice husk, coconut peel, cocoa peel to
                                produce energy friendly affordable charcoal briquette that is used for domestic purpose.
                                This initiative has created 15 direct employments for women and youth in kenema district
                                through the opportunity salone project.

                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-lg-6">
                <div class="card rounded border-0 m-2" style="border-right:5px solid cyan!important;">
                    <div class="row">

                        <div class="col-lg-5">
                            <img src="/img/oil.jpeg"
                                 style="border-right:15px solid cyan!important; height: 380px!important;"
                                 class="rounded img-fluid">
                        </div>
                        <div class="col-lg-7">

                            <div class="card-body">
                                <h4>IMMAN MOIWA OIL PALM PLANTATION</h4>
                                A youth initiative business that is utilizing affordable palm oil process machine to
                                ease intensive labour for rural farmers and at the same aid to produce hygienic palm oil
                                for domestic and industrial use. This initiative has created 25 direct jobs for youth in
                                five communities in kenema district through the opportunity Salone project.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card rounded border-0 m-2" style="border-right:5px solid cyan!important;">
                    <div class="row">

                        <div class="col-lg-5">
                            <img src="/img/clean.jpeg"
                                 style="border-right:15px solid cyan!important; height: 300px!important;"
                                 class="rounded img-fluid">
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body">
                                <h3>BROOK CLEAN</h3>

                                Conteh industries is a youth initiative enterprise that uses palm kernel oil to produce
                                washing detergent in Port Loko District. Brook Clean is a user friendly detergent soap
                                that is used for various domestic purposes. This initiative has created job for 15
                                youths and 30 indirect jobs for students as a sales agent.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card rounded border-0 m-2" style="border-right:5px solid cyan!important;">
                    <div class="row">

                        <div class="col-lg-5">
                            <img src="/img/farm.jpeg"
                                 style="border-right:15px solid cyan!important; height: 300px!important;"
                                 class="rounded img-fluid">
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body">
                                <h4>NONGOWA GREEN FARMERS</h4>

                                these are set of young women who have been marginalised by society yet they were coached
                                to form a business from their farming. They have been able to set up a gari process shop
                                in Pothehun community, Kenema District
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Appoinment Start -->
<div class="container-fluid appoinment mb-6 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container pt-5">
        <div class="row gy-5 gx-0">
            <div class="col-lg-12  pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-uppercase text-white mb-4">Get in touch</h1>
                <p class="text-white mb-5 wow fadeIn" data-wow-delay="0.4s">
                    Get in touch with us to help elevate your business, through professional consultancy, empowerment
                    and brand advocacy or partnerships.
                </p>


                <div class="d-flex align-items-center text-start mx-auto wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn-lg-square bg-white">
                        <i class="bi bi-geo-alt text-dark fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-white text-uppercase">Office Address</h6>
                        <span class="text-white">20 Salia Street off Koroma Street Kenema District, Sierra Leone</span>
                    </div>
                </div>


                <hr class="bg-body">
                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                    <div class="btn-lg-square bg-white">
                        <i class="bi bi-phone text-dark fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-white text-uppercase">Tel</h6>
                        <span class="text-white"> <a class="text-white" href="tel:+232 34 12 59 21">+232 34 12 59 21</a></span>
                    </div>
                </div>


                <hr class="bg-body">
                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                    <div class="btn-lg-square bg-white">
                        <i class="bi bi-inbox text-dark fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-white text-uppercase">Email</h6>
                        <span class="text-white"><a href="mailto:info@farmtok.org"
                                                    class="text-white">info@farmtok.org</a></span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- Appoinment End -->


<!-- Team Start -->
{{--<div class="container-fluid team pt-6 pb-6">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">--}}
{{--            <h1 class="display-6 text-uppercase mb-5">Meet Our team of Professionals and Volunteers</h1>--}}
{{--        </div>--}}
{{--        <div class="row g-4">--}}
{{--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="position-relative overflow-hidden">--}}
{{--                        <img class="img-fluid w-100 rounded" src="img/member-1.jpg" alt="">--}}
{{--                        <div class="team-social rounded">--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-center p-4">--}}
{{--                        <h5 class="mb-1">Alex Robin</h5>--}}
{{--                        <span>Member</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="position-relative overflow-hidden">--}}
{{--                        <img class="img-fluid w-100 rounded" src="img/member-2.jpg" alt="">--}}
{{--                        <div class="team-social rounded">--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-center p-4">--}}
{{--                        <h5 class="mb-1">Andrew Bon</h5>--}}
{{--                        <span>Member</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="position-relative overflow-hidden">--}}
{{--                        <img class="img-fluid w-100 rounded" src="img/member-3.jpg" alt="">--}}
{{--                        <div class="team-social rounded">--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-center p-4">--}}
{{--                        <h5 class="mb-1">Martin Tompson</h5>--}}
{{--                        <span>Member</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="position-relative overflow-hidden">--}}
{{--                        <img class="img-fluid w-100 rounded" src="img/member-4.jpg" alt="">--}}
{{--                        <div class="team-social rounded">--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>--}}
{{--                            <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-center p-4">--}}
{{--                        <h5 class="mb-1">Clarabelle Samber</h5>--}}
{{--                        <span>Member</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Team End -->


<!-- Newsletter Start -->
<div class="container-fluid newsletter mt-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="bg-white p-5 mb-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-uppercase mb-4">Newsletter</h1>
                    <div class="d-flex">
                        <i class="far fa-envelope-open fa-3x text-primary me-4"></i>
                        <p class="fs-5 fst-italic mb-0">Join our newsletter if you will like to hear from us</p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="form-floating mb-3">

                        <style>@import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');</style>
                        <div class="newsletter-form-container">
                            <form class="newsletter-form"
                                  action="https://app.loops.so/api/newsletter-form/cm67wiurb01rcd3jjoh65c84c"
                                  method="POST"
                                  style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%;">
                                <input
                                    name="newsletter-form-input"
                                    type="email"
                                    placeholder="you@example.com"
                                    required=""
                                    class=" newsletter-form-input form-control border-0 bg-light form-control-lg"
                                >

                                <button type="submit"
                                        class="newsletter-form-button btn btn-primary w-100 py-3 mt-2"
                                >
                                    Subscribe to our newsletter
                                </button>
                                <button type="button" class="newsletter-loading-button"
                                        style="background: rgb(13, 148, 136); font-size: 14px; color: rgb(255, 255, 255); font-family: Inter, sans-serif; display: none; width: 100%; max-width: 300px; white-space: normal; height: 38px; align-items: center; justify-content: center; flex-direction: row; padding: 9px 17px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px; border-radius: 6px; text-align: center; font-style: normal; font-weight: 500; line-height: 20px; border: none; cursor: pointer;">
                                    Please wait...
                                </button>
                            </form>
                            <div class="newsletter-success"
                                 style="display: none; align-items: center; justify-content: center; width: 100%;"><p
                                    class="newsletter-success-message"
                                    style="font-family: Inter, sans-serif; color: rgb(0, 0, 0); font-size: 14px;">
                                    Thanks! We'll be in touch!</p></div>
                            <div class="newsletter-error"
                                 style="display: none; align-items: center; justify-content: center; width: 100%;"><p
                                    class="newsletter-error-message"
                                    style="font-family: Inter, sans-serif; color: rgb(185, 28, 28); font-size: 14px;">
                                    Oops! Something went wrong, please try again</p></div>

                            <button
                                class="btn btn-primary w-100 py-3"
                                type='button'
                                style='color:#6b7280;font: 14px, Inter, sans-serif;margin:10px auto;text-align:center;display:none;background:transparent;border:none;cursor:pointer'
                                onmouseout='this.style.textDecoration="none"'
                                onmouseover='this.style.textDecoration="underline"'
                                &larr; Back
                            >Submit Now
                            </button>

                        </div>
                        <script>
                            function submitHandler(event) {
                                event.preventDefault();
                                var container = event.target.parentNode;
                                var form = container.querySelector(".newsletter-form");
                                var formInput = container.querySelector(".newsletter-form-input");
                                var success = container.querySelector(".newsletter-success");
                                var errorContainer = container.querySelector(".newsletter-error");
                                var errorMessage = container.querySelector(".newsletter-error-message");
                                var backButton = container.querySelector(".newsletter-back-button");
                                var submitButton = container.querySelector(".newsletter-form-button");
                                var loadingButton = container.querySelector(".newsletter-loading-button");


                                const rateLimit = () => {
                                    errorContainer.style.display = "flex";
                                    errorMessage.innerText = "Too many signups, please try again in a little while";
                                    submitButton.style.display = "none";
                                    formInput.style.display = "none";
                                    backButton.style.display = "block";
                                }

                                // Compare current time with time of previous sign up
                                var time = new Date();
                                var timestamp = time.valueOf();
                                var previousTimestamp = localStorage.getItem("loops-form-timestamp");

                                // If last sign up was less than a minute ago
                                // display error
                                if (previousTimestamp && Number(previousTimestamp) + 60000 > timestamp) {
                                    rateLimit();
                                    return;
                                }
                                localStorage.setItem("loops-form-timestamp", timestamp);

                                submitButton.style.display = "none";
                                loadingButton.style.display = "flex";

                                var formBody = "userGroup=&mailingLists=&email="
                                    + encodeURIComponent(formInput.value)
                                ;

                                fetch(event.target.action, {
                                    method: "POST",
                                    body: formBody,
                                    headers: {
                                        "Content-Type": "application/x-www-form-urlencoded",
                                    },
                                })
                                    .then((res) => [res.ok, res.json(), res])
                                    .then(([ok, dataPromise, res]) => {
                                        if (ok) {
                                            // If response successful
                                            // display success
                                            success.style.display = "flex";
                                            form.reset();
                                        } else {
                                            // If response unsuccessful
                                            // display error message or response status
                                            dataPromise.then(data => {
                                                errorContainer.style.display = "flex";
                                                errorMessage.innerText = data.message
                                                    ? data.message
                                                    : res.statusText;
                                            });
                                        }
                                    })
                                    .catch(error => {
                                        // check for cloudflare error
                                        if (error.message === "Failed to fetch") {
                                            rateLimit();
                                            return;
                                        }
                                        // If error caught
                                        // display error message if available
                                        errorContainer.style.display = "flex";
                                        if (error.message) errorMessage.innerText = error.message;
                                        localStorage.setItem("loops-form-timestamp", '');
                                    })
                                    .finally(() => {
                                        formInput.style.display = "none";
                                        loadingButton.style.display = "none";
                                        backButton.style.display = "block";
                                    });
                            }

                            function resetFormHandler(event) {
                                var container = event.target.parentNode;
                                var formInput = container.querySelector(".newsletter-form-input");
                                var success = container.querySelector(".newsletter-success");
                                var errorContainer = container.querySelector(".newsletter-error");
                                var errorMessage = container.querySelector(".newsletter-error-message");
                                var backButton = container.querySelector(".newsletter-back-button");
                                var submitButton = container.querySelector(".newsletter-form-button");

                                success.style.display = "none";
                                errorContainer.style.display = "none";
                                errorMessage.innerText = "Oops! Something went wrong, please try again";
                                backButton.style.display = "none";
                                formInput.style.display = "flex";
                                submitButton.style.display = "flex";
                            }

                            var formContainers = document.getElementsByClassName(
                                "newsletter-form-container"
                            );

                            for (var i = 0; i < formContainers.length; i++) {
                                var formContainer = formContainers[i]
                                var handlersAdded = formContainer.classList.contains('newsletter-handlers-added')
                                if (handlersAdded) continue;
                                formContainer
                                    .querySelector(".newsletter-form")
                                    .addEventListener("submit", submitHandler);
                                formContainer
                                    .querySelector(".newsletter-back-button")
                                    .addEventListener("click", resetFormHandler);
                                formContainer.classList.add("newsletter-handlers-added");
                            }
                        </script>

                    </div>
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
                <p class="mb-2 text-white"><i class="fa fa-map-marker-alt text-white me-3"></i>20 Salia Street off
                    Koroma Street
                    Kenema District, Sierra Leone</p>
                <p class="mb-2 text-white"><i class="fa fa-phone-alt text-white me-3"></i>+232 79060578</p>
                <p class="mb-2 text-white"><i class="fa fa-envelope text-white me-3"></i>info@farmtok.org</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light me-2 rounded" href="https://www.instagram.com/farmtok/"
                       target="_blank"><i
                            class="fab fa-instagram"></i></a>

                    <a class="btn btn-square btn-light me-2 rounded" target="_blank"
                       href="https://www.facebook.com/share/16TN3NGVBS"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light me-2 rounded"
                       href="https://www.linkedin.com/in/farm-tok-consultancy-71836a326/"
                       target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Quick Links</h5>
                <a class="btn btn-link text-white" href="{{route("home")}}">Home</a>
                <a class="btn btn-link text-white" href="{{route("about")}}">About Us</a>
                <a class="btn btn-link text-white" href="{{route("contact")}}">Contact Us</a>

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
