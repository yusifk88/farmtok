@extends("layouts.site")
@section("page")

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <h1 class="display-1 text-white mb-4 animated zoomIn">
                            Equal job opportunities for women, youth and persons living with disability.
                        </h1>
{{--                        <a href="#" class="btn btn-primary py-3 px-4">Explore More</a>--}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <h1 class="display-1 text-white mb-4 animated zoomIn">
                            Business Coach,
                            Business Consultation,
                            Monitoring and Evaluation.
                        </h1>
{{--                        <a href="#" class="btn btn-primary py-3 px-4">Explore More</a>--}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <h1 class="display-1 text-white mb-4 animated zoomIn">
                            A platform for
                            innovative interaction to foster
                            connections.
                        </h1>
{{--                        <a href="#" class="btn btn-primary py-3 px-4">Explore More</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid w-100" src="/img/crest.png">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">Our service include:</h1>
                    <p class="mb-4">At FarmTok we give you all the tools you need to step up your business with
                        the appropriate  professional and technical skills needed to help you present and grow your business better.</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-xl-square bg-light">
                                    <i class="fa fa-users-cog fa-2x text-primary"></i>
                                </div>
                                <h5 class="lh-base text-uppercase mb-0">Business Coaching And Consulting Service</h5>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-xl-square bg-light">
                                    <i class="fa fa-tachometer-alt fa-2x text-primary"></i>
                                </div>
                                <h5 class="lh-base text-uppercase mb-0">Capacity Building And Training</h5>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-xl-square bg-light">
                                    <i class="fa fa-paint-brush fa-2x text-primary"></i>
                                </div>
                                <h5 class="lh-base text-uppercase mb-0">Business Branding And Advocacy</h5>
                            </div>
                        </div>
                    </div>
                    <div class="border border-5 rounded border-primary p-4 text-center mt-4">
                        <h4 class="lh-base text-uppercase mb-0">Let's help you grow beyond borders!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container pt-4">
            <div class="row g-0 feature-row wow fadeIn" data-wow-delay="0.1s">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100">
                        <div class="feature-icon btn-xxl-square bg-primary mb-4 mt-n4">
                            <i class="fa fa-hammer fa-2x text-white"></i>
                        </div>
                        <div class="p-5 pt-0">
                            <h5 class="text-uppercase mb-3">OUR VALUE</h5>
                            <p>The values of Farm Tok Consultancy are centered by a deep
                                commitment for communication towards decent living and equal
                                job opportunities for women, youth and persons living with disability
                                (PWD)...</p>
                            <a class="position-relative text-body text-uppercase small d-flex justify-content-between"
                               href="#"><b class="bg-white pe-3">Read More</b> <i
                                    class="bi bi-arrow-right bg-white ps-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="feature-item border h-100">
                        <div class="feature-icon btn-xxl-square bg-primary mb-4 mt-n4">
                            <i class="fa fa-sun fa-2x text-white"></i>
                        </div>
                        <div class="p-5 pt-0">
                            <h5 class="text-uppercase">OUR AIM</h5>
                            <p>FARM TOK CONSULTANCY aims to build a platform for
                                innovative interaction, and foster
                                connections, thereby empowering SMES and
                                farmers to access opportunities and improve their...</p>
                            <a class="position-relative text-body text-uppercase small d-flex justify-content-between"
                               href="#"><b class="bg-white pe-3">Read More</b> <i
                                    class="bi bi-arrow-right bg-white ps-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100">
                        <div class="feature-icon btn-xxl-square bg-primary mb-4 mt-n4">
                            <i class="fa fa-check-double fa-2x text-white"></i>
                        </div>
                        <div class="p-5 pt-0">
                            <h5 class="text-uppercase">OBJECTIVE</h5>
                            <p> The overall objectives of FARM TOK CONSULTANCY are to:
                                enable women, youth and families to make better business decisions for increasing their income
                                generating activities and opportunities...</p>
                            <a class="position-relative text-body text-uppercase small d-flex justify-content-between"
                               href="#"><b class="bg-white pe-3">Read More</b> <i
                                    class="bi bi-arrow-right bg-white ps-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
                    <div class="feature-item border h-100 bg-primary text-white">
                        <div class="feature-icon btn-xxl-square bg-primary mb-4 mt-n4">
                            <i class="fa fa-info fa-2x text-white"></i>
                        </div>
                        <div class="p-5 pt-0">
                            <h5 class="text-uppercase text-white">Talk to us!</h5>
                            <p>
                                +232 34 12 59 21
                            </p>
                               <p>
                                info@farmtok.org
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Features Start -->
    <div class="container-fluid feature mt-6 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 justify-content-end">
                <div class="col-lg-6 pt-5">
                    <div class="mt-5">
                        <h1 class="display-6 text-white text-uppercase mb-4 wow fadeIn" data-wow-delay="0.3s">
                            What we have done so far</h1>
                        <p class="text-light mb-4 wow fadeIn" data-wow-delay="0.4s">
                            Over the years we have made some impact in the area of business support in the form of
                            business consultation, brand and awareness advocacy and Capacity Building And Training
                            across different demographics such as youth in business, women in business and PWDs.
                        </p>
                        <div class="row g-4 pt-2 mb-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="flex-column rounded text-center border border-5 border-primary p-5">
                                    <h1 class="text-white" data-toggle="counter-up">1,500</h1>
                                    <p class="text-white text-uppercase mb-0">Youth trained</p>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="flex-column rounded text-center border border-5 border-primary p-5">
                                    <h1 class="text-white" data-toggle="counter-up">2,000</h1>
                                    <p class="text-white text-uppercase mb-0">Consultation for women-led businesses</p>
                                </div>
                            </div>

                               <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="flex-column rounded text-center border border-5 border-primary p-5">
                                    <h1 class="text-white" data-toggle="counter-up">200</h1>
                                    <p class="text-white text-uppercase mb-0">Brands transformed</p>
                                </div>
                            </div>


                               <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="flex-column rounded text-center border border-5 border-primary p-5">
                                    <h1 class="text-white" data-toggle="counter-up">700</h1>
                                    <p class="text-white text-uppercase mb-0">PWDs training support</p>
                                </div>
                            </div>


                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
    <!-- Testimonial Start -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-5">Our partners</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="testimonial-img">
                        <div class="animated flip infinite">
                            <img class="img-fluid" src="img/giz.jpeg" alt="">
                        </div>
                        <div class="animated flip infinite">
                            <img class="img-fluid" src="img/undp.png" alt="">
                        </div>
                        <div class="animated flip infinite">
                            <img class="img-fluid" src="img/worldbank.gif" alt="">
                        </div>
                        <div class="animated flip infinite">
                            <img class="img-fluid"  src="img/usaid.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid" width="220" src="/img/giz.jpeg" alt="">
                                <div class="ms-3">
                                    <h5 class="text-uppercase">GIZ</h5>
                                </div>
                            </div>
                            <p class="fs-5">(Deutsche Gesellschaft für Internationale Zusammenarbeit GmbH), a German development agenc
                            </p>
                        </div>
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid" width="120px" src="/img/undp.png" alt="">
                                <div class="ms-3">

                                    <h5 class="text-uppercase">UNDP</h5>
                                </div>
                            </div>
                            <p class="fs-5">United Nations Development Programme
                            </p>
                        </div>
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid" width="220" src="/img/worldbank.gif" alt="">
                                <div class="ms-3">
                                    <h5 class="text-uppercase">World bank</h5>
                                </div>
                            </div>
                            <p class="fs-5">World Bank, international financial institution
                            </p>
                        </div>
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid" width="220" src="/img/usaid.png" alt="">
                                <div class="ms-3">
                                    <h5 class="text-uppercase">USAID</h5>
                                </div>
                            </div>
                            <p class="fs-5">The U.S. Agency for International Developmen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Service Start -->
    <div class="container-fluid service pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-5">Projects</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="img/service-1.jpg" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase">Metal Works</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="img/service-2.jpg" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase">Steel welding</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="img/service-3.jpg" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase">pipe welding</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="img/service-4.jpg" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase">Custom welding</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="img/service-5.jpg" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase">Steel welding</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="img/service-6.jpg" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase">Metal Work</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="img/service-7.jpg" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase">Custom Welding</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="img/service-8.jpg" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase">Pipe Welding</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Appoinment Start -->
    <div class="container-fluid appoinment mt-6 mb-6 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container pt-5">
            <div class="row gy-5 gx-0">
                <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-uppercase text-white mb-4">We Complete Welding & Metal Projects in Time
                    </h1>
                    <p class="text-white mb-5 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                        augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.5s">
                        <div class="btn-lg-square bg-white">
                            <i class="bi bi-geo-alt text-dark fs-3"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-white text-uppercase">Office Address</h6>
                            <span class="text-white">123 Street, New York, USA</span>
                        </div>
                    </div>
                    <hr class="bg-body">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                        <div class="btn-lg-square bg-white">
                            <i class="bi bi-clock text-dark fs-3"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-white text-uppercase">Office Time</h6>
                            <span class="text-white">Mon-Sat 09am-5pm, Sun Closed</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.7s">
                    <div class="bg-white p-5">
                        <h2 class="text-uppercase mb-4">Online Appoinment</h2>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" id="mail" placeholder="Your Email">
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="mobile" placeholder="Your Mobile">
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select class="form-select border-0 bg-light" id="service">
                                        <option selected>Steel Welding</option>
                                        <option value="">Pipe Welding</option>
                                    </select>
                                    <label for="service">Choose A Service</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message"
                                              style="height: 130px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment End -->


    <!-- Team Start -->
    <div class="container-fluid team pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-5">Meet Our Professional and Experience Welder</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Alex Robin</h5>
                            <span>Welder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Andrew Bon</h5>
                            <span>Welder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Martin Tompson</h5>
                            <span>Welder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Clarabelle Samber</h5>
                            <span>Welder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



@endsection
