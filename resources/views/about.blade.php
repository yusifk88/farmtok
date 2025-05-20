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
                    <p>FARM TOK CONSULTANCY is a register company that offers business coaching, consultancy service,
                        media advocacy and campaign, BDS training and marketing specifically for rural SMES and farmers.
                        With the passion to boast the rich value that is embedded in the agriculture sector we also birth our
                        signature program radio program Farm Tok. Our aim is to equipped farmers and rural SMES to
                        embrace the innovative potentials within the agricultural sector by build resilient livelihood
                        approach and climate friendly environment. We are identified by the name Farm Tok Consultancy
                        because our consultancy servers as a solution hub for opportunities by addressing the daily
                        challenge of our rural Farmers and SMES.</p>


                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid w-100 rounded" src="/img/crest.png">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">Our Value</h1>
                    <p class="mb-4">
                        The values of Farm Tok Consultancy are centred by a deep commitment for
                        communication towards decent living and equal job opportunities for women, youth and persons
                        living with disability (PWD) to access quality information and knowledge on how they can improve
                        their livelihood through agriculture and innovative Business approach as Small and Medium
                        Enterprises (SMES)
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
                        The overall objectives of FARM TOK CONSULTANCY are to: enable women, youth
                        and families to make better business decisions for increasing their income generating activities and
                        opportunities; promote women&#39;s, economic empowerment, particularly in communities that are
                        marginalized; contribute to the social and economic development of women, youth and Persons
                        Living with disability (PWD) living in conditions of poverty.
                    </p>

                </div>

                <div class="col-lg-12">
                    <hr>
                    <h4 class="display-3">Our  core services</h4>
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

@endsection
