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
                    <a class="text-white" href="tel:+232 79060578">+232 79060578</a>
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
                        <span class="text-white"> <a class="text-white" href="tel:+232 79060578">+232 79060578</a></span>
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
<div class="container-fluid team pt-6 pb-6">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 text-uppercase mb-5">Meet Our team of Professionals and Volunteers</h1>
        </div>
        <div class="row g-4">

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100 rounded" src="/img/member4.jpeg" alt="Mariama M Kondeh">
                        <div class="team-social rounded">
                            <a class="btn btn-square btn-dark mx-1" href="https://www.facebook.com/share/16TN3NGVBShttps://www.facebook.com/share/16TN3NGVBS"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href="https://www.linkedin.com/in/farm-tok-consultancy-71836a326/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href="https://www.instagram.com/farmtok/"><i class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-1 mt-10">Mary Alpha</h5>
                        <span>Chairman/Team Lead</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100 rounded" src="/img/member1.jpeg" alt="Grace Musu Saidu">
                        <div class="team-social rounded">
                            <a class="btn btn-square btn-dark mx-1" href="https://www.facebook.com/share/16TN3NGVBShttps://www.facebook.com/share/16TN3NGVBS"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href="https://www.linkedin.com/in/farm-tok-consultancy-71836a326/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href="https://www.instagram.com/farmtok/"><i class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-1">Grace Musu Saidu</h5>
                        <span>Lead Trainer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100 rounded" src="/img/member2.jpeg" alt="Michael Torya">
                        <div class="team-social rounded">
                            <a class="btn btn-square btn-dark mx-1" href="https://www.facebook.com/share/16TN3NGVBShttps://www.facebook.com/share/16TN3NGVBS"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href="https://www.linkedin.com/in/farm-tok-consultancy-71836a326/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href="https://www.instagram.com/farmtok/"><i class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-1">Michael Torya</h5>
                        <span>Agronomist and Farm Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100 rounded" src="/img/member3.jpeg" alt="Mariama M Kondeh">
                        <div class="team-social rounded">
                            <a class="btn btn-square btn-dark mx-1" href="https://www.facebook.com/share/16TN3NGVBShttps://www.facebook.com/share/16TN3NGVBS"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href="https://www.linkedin.com/in/farm-tok-consultancy-71836a326/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href="https://www.instagram.com/farmtok/"><i class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-1">Mariama M Kondeh</h5>
                        <span>Assistant Farm Manager</span>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Team End -->
<div class="container">
    <div class="row">
        <div class="col-12 mb-4">
            <h3 class="text-center">Let's get social</h3>
        </div>
        <div class="col-lg-6 wow fadeInUp">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DJEuKlzIiv-/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/DJEuKlzIiv-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/DJEuKlzIiv-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by FARM TOK CONSULTANCY SIERRA LEONE (@farmtok)</a></p></div></blockquote>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>

            <div class="col-lg-6 wow fadeInUp">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/C2cQjYKNP-3/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/C2cQjYKNP-3/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/C2cQjYKNP-3/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by FARM TOK CONSULTANCY SIERRA LEONE (@farmtok)</a></p></div></blockquote>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>


        <div class="col-lg-6 wow fadeInUp">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/C8dWJUSID9z/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/C8dWJUSID9z/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">在 Instagram 查看这篇帖子</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/C8dWJUSID9z/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">FARM TOK CONSULTANCY SIERRA LEONE (@farmtok) 分享的帖子</a></p></div></blockquote>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>

        <div class="col-lg-6 wow fadeInUp">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C4PL16WIFUs/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C4PL16WIFUs/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C4PL16WIFUs/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by FARM TOK CONSULTANCY SIERRA LEONE (@farmtok)</a></p></div></blockquote>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>


    </div>
</div>

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
