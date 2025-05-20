@extends("layouts.site")

@section("header")
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="FarmTok consultancy"/>
    <meta property="og:description"
          content="At FarmTok we give you all the tools you need to step up your business with the appropriate professional and technical skills needed to help you present and grow your business better."/>
    <meta property="og:url" content="{{route("home")}}"/>
    <meta property="og:site_name" content="FarmTok consultancy"/>
    <meta property="og:image" content="/img/crest.png"/>
    <meta property="og:image:secure_url" content="/img/crest.png"/>
    <meta name="keywords"
          content="Business, agribusiness, brand, consultancy, Sierra Leone, FarmTok, Farm Tok, Farm Talk, Africa, women in business, youth in agriculture"/>
@endsection

@section("page")

    <!-- Carousel Start -->
    <div
        class="container-fluid p-0 mb-6 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0"
                        class="active rounded d-none d-md-block"
                        aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid rounded" src="img/carousel-1.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" class="rounded d-none d-md-block" data-bs-slide-to="1"
                        aria-label="Slide 2">
                    <img class="img-fluid rounded" src="img/carousel-2.jpeg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" class="rounded d-none d-md-block" data-bs-slide-to="2"
                        aria-label="Slide 3">
                    <img class="img-fluid rounded" src="img/carousel-3.jpeg" alt="Image">
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
                    <img class="w-100" src="img/carousel-2.jpeg" alt="Image">
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
                    <img class="w-100" src="img/carousel-3.jpeg" alt="Image">
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
    <div class="container-fluid  pb-6">
        <div class="container">
            <div class="row g-5">

                <div class="col-md-2 mx-auto wow fadeIn">
                    <img class="img-fluid w-100" src="/img/crest.png">
                </div>
                <div class="col-lg-12">
                    <h1 class="display-6 text-center">Our core services</h1>

                </div>

                <div class="col-md-4 wow fadeIn">
                    <div class="card  border-0 rounded service-card" style="border-right:15px solid #194A11!important;">
                        <div class="card-body">
                            <h4 class="mb-2">⁠Business Coaching & Psychosocial Development</h4>
                            We provide tailored business coaching and psychosocial support to empower rural youth,
                            women, and persons living with disabilities to build resilient and sustainable agricultural
                            enterprises.

                        </div>
                    </div>

                </div>

                <div class="col-md-4 wow fadeIn">
                    <div class="card border-0 rounded service-card" style="border-right:15px solid #EBAD24!important; height: 220px">
                        <div class="card-body">
                            <h4 class=" mb-2">Capacity Building & Training</h4>
                            Our hands-on training and mentorship programs strengthen the skills, knowledge, and confidence of rural SMEs and farmers to drive growth, innovation, and inclusion in agribusiness.
                        </div>
                    </div>

                </div>

                <div class="col-md-4 wow fadeIn">
                    <div class="card border-0 rounded service-card" style="border-right:15px solid #10CAF0!important; height: 220px">
                        <div class="card-body">
                            <h4 class=" mb-2">Policy Advocacy & Support</h4>
                            We engage stakeholders and advocate for inclusive agricultural policies that recognize and address the unique needs of marginalized rural entrepreneurs and farming communities.

                        </div>
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
                    <div class="feature-item border h-100" style="border-top-left-radius:20px !important; border-bottom-left-radius:20px !important;">
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
                               href="{{route("about")}}"><b class="bg-white pe-3">Read More</b> <i
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
                               href="{{route("about")}}"><b class="bg-white pe-3">Read More</b> <i
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
                                enable women, youth and families to make better business decisions for increasing their
                                income
                                generating activities and opportunities...</p>
                            <a class="position-relative text-body text-uppercase small d-flex justify-content-between"
                               href="{{route("about")}}"><b class="bg-white pe-3">Read More</b> <i
                                    class="bi bi-arrow-right bg-white ps-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
                    <div class="feature-item border h-100 bg-primary text-white" style="border-top-right-radius:20px !important; border-bottom-right-radius:20px !important;">
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
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.4s">
                                <div class="flex-column rounded text-center border border-5 border-primary p-5">
                                    <h1 class="text-white" data-toggle="counter-up">1,200</h1>
                                    <p class="text-white mb-0">Trained women youth and person living with disability</p>
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

            <div class="row">
                <div class="col-md-2 text-center">
                    <img alt="International labour organization" title="International labour organization"
                         class="img-fluid m-2" src="/img/ilo.png">
                </div>
                <div class="col-md-2 text-center">
                    <img alt="African seed" title="African seed" class="img-fluid" src="/img/african_seed.jpg">
                </div>
                <div class="col-md-2 text-center">
                    <img
                        alt="The development alchemist"
                        title="African seed"
                        class="img-fluid"
                        src="/img/alchemist.jpg"
                    >
                </div>
                <div class="col-md-2 text-center">
                    <img
                        alt="Adami Project"
                        title="Adami Project"
                        class="img-fluid"
                        src="/img/adami.png"
                    >
                </div>
                <div class="col-md-2 text-center">
                    <img
                        alt="Adami Project"
                        title="Adami Project"
                        class="img-fluid"
                        src="/img/opportunity_salone.jpg"
                    >
                </div>

                <div class="col-md-2 col-sm-12 text-center">
                    <img
                        alt="The Sierra Leone Chamber of Agribusiness Development"
                        title="The Sierra Leone Chamber of Agribusiness Development"
                        class="img-fluid"
                        src="/img/slecad.jpg">
                </div>


            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    {{--    <!-- Service Start -->--}}
    {{--    <div class="container-fluid service pt-6 pb-6">--}}
    {{--        <div class="container">--}}
    {{--            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">--}}
    {{--                <h1 class="display-6 text-uppercase mb-5">Projects</h1>--}}
    {{--            </div>--}}
    {{--            <div class="row g-4">--}}
    {{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">--}}
    {{--                    <div class="service-item">--}}
    {{--                        <div class="service-inner pb-5">--}}
    {{--                            <img class="img-fluid w-100 rounded" src="img/service-1.jpg" alt="">--}}
    {{--                            <div class="service-text px-5 pt-4">--}}
    {{--                                <h4 class="text-uppercase">Business development seminar for women</h4>--}}
    {{--                                    <p>Summary of the event and something small to read</p>--}}

    {{--                            </div>--}}
    {{--                            <a class="btn btn-light px-3" href="">Read More<i--}}
    {{--                                    class="bi bi-chevron-double-right ms-1"></i></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">--}}
    {{--                    <div class="service-item">--}}
    {{--                        <div class="service-inner pb-5">--}}
    {{--                            <img class="img-fluid w-100 rounded" src="img/service-2.jpg" alt="">--}}
    {{--                            <div class="service-text px-5 pt-4">--}}
    {{--                                <h4 class="text-uppercase">SME training</h4>--}}
    {{--                                    <p>Summary of the event</p>--}}
    {{--                            </div>--}}
    {{--                            <a class="btn btn-light px-3" href="">Read More<i--}}
    {{--                                    class="bi bi-chevron-double-right ms-1"></i></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
    {{--                    <div class="service-item">--}}
    {{--                        <div class="service-inner pb-5">--}}
    {{--                            <img class="img-fluid w-100 rounded" src="img/service-3.jpg" alt="">--}}
    {{--                            <div class="service-text px-5 pt-4">--}}
    {{--                                <h4 class="text-uppercase">Brand and packaging training</h4>--}}
    {{--                                    <p>Summary of the event and something small to read</p>--}}
    {{--                            </div>--}}
    {{--                            <a class="btn btn-light px-3" href="">Read More<i--}}
    {{--                                    class="bi bi-chevron-double-right ms-1"></i></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">--}}
    {{--                    <div class="service-item">--}}
    {{--                        <div class="service-inner pb-5">--}}
    {{--                            <img class="img-fluid w-100 rounded" src="img/service-4.jpg" alt="">--}}
    {{--                            <div class="service-text px-5 pt-4">--}}
    {{--                                <h4 class="text-uppercase">Business consultancy </h4>--}}
    {{--                                <p>Summary of the event and something small to read</p>--}}
    {{--                            </div>--}}
    {{--                            <a class="btn btn-light px-3" href="">Read More<i--}}
    {{--                                    class="bi bi-chevron-double-right ms-1"></i></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}


    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- Service End -->--}}

@endsection
