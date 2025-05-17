@extends("layouts.site")

@section("header")
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="FarmTok consultancy" />
    <meta property="og:description" content="At FarmTok we give you all the tools you need to step up your business with the appropriate professional and technical skills needed to help you present and grow your business better." />
    <meta property="og:url" content="{{route("about")}}" />
    <meta property="og:site_name" content="FarmTok consultancy" />
    <meta property="og:image" content="/img/crest.png" />
    <meta property="og:image:secure_url" content="/img/crest.png" />
    <meta name="keywords" content="Business, agribusiness, brand, consultancy, Sierra Leone, FarmTok, Farm Tok, Farm Talk, Africa, women in business, youth in agriculture" />
@endsection

@section("page")
    <!-- Page Header Start -->
    <div class="container-fluid page-header pt-5 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white p-5">
                        <h1 class="display-6 text-uppercase mb-3 animated slideInDown">About</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <h1 class="display-2 text-uppercase mb-4 text-center">FarmTok Consultancy</h1>

                    <h1 class="display-6 text-uppercase mb-4">Who we are</h1>
                    <p>Write about us here</p>


                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid w-100 rounded" src="/img/crest.png">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">Our Value</h1>
                    <p class="mb-4">
                        The values of Farm Tok Consultancy are centered by a deep
                        commitment for communication towards decent living and equal
                        job opportunities for women, youth and persons living with disability
                        (PWD) to access quality information and knowledge on how they
                        can improve their livelihood through agriculture and innovative
                        Business approach as Small and Medium Enterprises (SMES).
                    </p>

                </div>
                <hr>

                <div class="col-lg-4 wow fadeIn" style="margin-top: 60px" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid w-100 rounded" src="/img/woman.jpg">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">OUR AIM</h1>

                    <p class="mb-4">
                        FARM TOK CONSULTANCY aims to build a platform for
                        innovative interaction, and foster
                        connections, thereby empowering SMES and
                        farmers to access opportunities and improve their
                        agricultural practices thereby creating a safe
                        environment for a better climate in sierra Leone.
                    </p>

                    <h1 class="display-6 text-uppercase mb-4">OBJECTIVE</h1>

                    <p class="mb-4">
                        The overall objectives of FARM TOK CONSULTANCY are to:
                        enable women, youth and families to make better business decisions for increasing their income
                        generating activities and opportunities;
                        promote women's, economic empowerment, particularly in communities that are marginalized;
                        contribute to the social and economic development of women, youth and Persons Living with disability
                        (PWD) living in conditions of poverty.
                    </p>

                </div>

                <div class="col-lg-12">
                    <hr>
                    <h1 class="display-3">The main services we are offering</h1>
                </div>

                <div class="col-lg-4">
                    <div class="card rounded border-0" style="background-color: rgba(0,128,1,0.18); color: green!important; height: 340px; border-right: 15px solid green!important;">
                        <div class="card-body text-success">
                            <h3 class="text-success">Business Coaching And Consulting Service</h3>
                            <ul>
                                <li>Business Coach</li>
                                <li>Business Consultation</li>
                                <li>Monitoring and Evaluation</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card rounded border-0" style="background-color: rgba(10,187,239,0.18); height: 340px; border-right: 15px solid #0abbef!important;">
                        <div class="card-body">
                            <h3 style="color: #0ABBEF">Capacity Building And Training</h3>
                            <ul>
                                <li>Business management training</li>
                                <li>ntrepreneurship Development Programs</li>
                                <li>Workshops and seminars on market trends</li>
                                <li>Technical training in modern farming techniques</li>
                                <li>Proposal writing</li>
                                <li>Business strategy and planning</li>
                            </ul>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="card rounded border-0" style="background-color: rgba(253,191,4,0.18); height: 340px; border-right: 15px solid #FDBF04!important;">
                        <div class="card-body">
                            <h3 style="color: #FDBF04">Business Branding And Advocacy</h3>
                            <ul>
                                <li>Logo designs and visual identity</li>
                                <li>Brand strategy and development</li>
                                <li>Social media management</li>
                                <li>Business networking and representation</li>
                                <li>Policy advocacy and Support</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
    <!-- About End -->

@endsection
