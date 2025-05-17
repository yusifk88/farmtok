@extends("layouts.site")
@section("header")
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="FarmTok consultancy" />
    <meta property="og:description" content="At FarmTok we give you all the tools you need to step up your business with the appropriate professional and technical skills needed to help you present and grow your business better." />
    <meta property="og:url" content="{{route("contact")}}" />
    <meta property="og:site_name" content="FarmTok consultancy" />
    <meta property="og:image" content="/img/crest.png" />
    <meta property="og:image:secure_url" content="/img/crest.png" />
    <meta name="keywords" content="Business, agribusiness, brand, consultancy, Sierra Leone, FarmTok, Farm Tok, Farm Talk, Africa, women in business, youth in agriculture" />
@endsection

@section("page")
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid w-100" src="/img/crest.png">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">Contact us</h1>
                    <p class="mb-4">You can contact us via </p>
                    <div class="row">
                        <div class="d-flex align-items-start text-start wow fadeIn" data-wow-delay="0.5s">

                            <div class="btn-lg-square bg-light">
                                <i class="bi bi-geo-alt text-dark fs-3"></i>
                            </div>

                            <div class="ms-3">
                                <h6 class="text-black-50 text-uppercase">Office Address</h6>
                                <span class="text-black-50 ">20 Salia Street off Koroma Street Kenema District, Sierra Leone</span>
                            </div>
                        </div>


                        <hr class="bg-body">
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                            <div class="btn-lg-square bg-light">
                                <i class="bi bi-phone text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-black-50 text-uppercase">Tel</h6>
                                <span class="text-white"> <a class="text-black-50" href="tel:+232 34 12 59 21">+232 34 12 59 21</a></span>
                            </div>
                        </div>


                        <hr class="bg-body">
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                            <div class="btn-lg-square bg-light">
                                <i class="bi bi-inbox text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-black-50 text-uppercase">Email</h6>
                                <span class="text-black-50"><a href="mailto:info@farmtok.org" class="text-black-50">info@farmtok.org</a></span>
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

@endsection
