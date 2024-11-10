@extends('frontend.layout.master')
@push('title')
    Home
@endpush
@section('body')
    <!-- ==============================
                          banner section starts from here
                         ================================= -->
    <div id="banner" class="banner">
        <div class="video-container">
            <!-- <iframe class="banner_video"
                                                                                        src="https://www.youtube.com/embed/7T3DKRf6Poc?autoplay=1&playlist=arnG_xBcmLs&loop=1&mute=1&controls=0"
                                                                                        frameborder="0" allowfullscreen></iframe> -->

            <iframe class="banner_video" src="https://www.youtube.com/embed/WcYmEo9gBfk?autoplay=1&&mute=1&controls=0"
                frameborder="0" allowfullscreen></iframe>


            <div class="overlay">
                <div class="overlay-text">
                    <h2>Crafting Visual Stories, Shaping<br> Digital Futures</h2>
                    <span class="d-block">Unlock Your Potential with Cutplix</span>
                    <a href="#" class="primary_btn">Get Creative</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================
                      evolution section starts from here
                     ================================= -->

    <div id="evolution" class="evolution section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top_heading text-center">
                        <h2 class="common-heading">Our Evolution</h2>
                        <span class="common-paragraph pt-4">From Vision to Innovation - Our Transformative Journey</span>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video">
                            <iframe class="evolution_video"
                                src="https://www.youtube.com/embed/WcYmEo9gBfk?autoplay=0&mute=0&controls=1"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6>Digital Wizard</h6>
                        <h2 class="fw-bold pt-4">Empowering Your Online<br> Presence with Diverse Services.</h2>
                        <p class="common-paragraph pt-2">Cutplix's journey is a story of innovation and adaptability. We
                            lead in media production, redefine visual storytelling, and empower your online presence with
                            diverse services. Join us in shaping the future of media.</p>
                        <h5 class="text-center pt-4 pb-4">OUR ACHIVEMENT</h5>
                        <div class="count d-flex justify-content-between">
                            <div class="one text-center">
                                <span>104+</span>
                                <p>total project</p>
                            </div>
                            <div class="one text-center">
                                <span>04+</span>
                                <p>Country</p>
                            </div>
                            <div class="one text-center">
                                <span>301+</span>
                                <p>User</p>
                            </div>
                            <div class="one text-center">
                                <span>23+</span>
                                <p>tEmployee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================
                                                                              services section starts from here
                                                                          ================================= -->


    <div id="service" class="service section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top_heading text-center">
                        <h2 class="common-heading fw-bold pt-4">Services</h2>
                        <span class="common-paragraph pt-4">Our Commitment to Exceptional Solutions</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service_slider">
                        <div class="topbar">
                            <button id="btn1" class="active-button" onclick="showDiv(1)">Media</button>
                            <button id="btn2" onclick="showDiv(2)">Creative</button>
                            {{-- <button id="btn3" onclick="showDiv(3)">Application</button>
                            <button id="btn4" onclick="showDiv(4)">Digital Outreach</button> --}}
                        </div>

                        <!-- main content part starts from here -->

                        <div class="inner_part mt-5">

                            <!-- media button contents fully here -->
                            <div id="div1" class="active">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h2 class=" fw-bold pt-4">Discover and Experience Our Media Expertise</h2>
                                        <p class="common-paragraph pt-2">Elevate Your Brand Through Visual Excellence.
                                            Explore Our Media Expertise, Unleash the Power of Compelling Storytelling,
                                            Achieve Success, Leave a Lasting Impact, and Redefine Your Digital Presence with
                                            Cutplix.</p>

                                        <div class="buttons mt-5">
                                            <button id="btn5" class="active-button d-block"
                                                onclick="NestedshowDiv(5)"><span>1</span>Short film </button>
                                            <button class="d-block" id="btn6"
                                                onclick="NestedshowDiv(6)"><span>2</span>Music videos</button>
                                            <button class="d-block" id="btn7"
                                                onclick="NestedshowDiv(7)"><span>3</span>Social media content</button>
                                            <button class="d-block" id="btn8"
                                                onclick="NestedshowDiv(8)"><span>4</span>Advertising and commercial
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="div5" class="active">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/Rectangle 15.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar" aria-label="Danger example"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div6" class="hidden">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/ai.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div7" class="hidden">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/music.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div8" class="hidden">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/comercial.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- creative buttons full content here -->
                            <div id="div2" class="hidden">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h2 class=" fw-bold pt-4">Unleash Your Creative Potential Here and Begin Exploring
                                        </h2>
                                        <p class="common-paragraph pt-2">Immerse Yourself in a World of Creative
                                            Exploration: Ignite Your Imagination, Inspire Innovation, and Transform Ideas
                                            into Extraordinary Realities with Cutplix's Expertise in Design and
                                            Conceptualization.</p>

                                        <div class="buttons mt-5">
                                            <button id="btn9" class="active-button d-block"
                                                onclick="NestedshowDiv(9)"><span>1</span>Packaging</button>
                                            <button class="d-block" id="btn10"
                                                onclick="NestedshowDiv(10)"><span>2</span>Brand Identity</button>
                                            <button class="d-block" id="btn11"
                                                onclick="NestedshowDiv(11)"><span>3</span>Product Design</button>
                                            <button class="d-block" id="btn12"
                                                onclick="NestedshowDiv(12)"><span>4</span>Product Design</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="div9" class="active">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/Rectangle 15.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div10" class="hidden">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/brand.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div11" class="hidden">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/product.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div12" class="hidden">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/Rectangle 15.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Application buttons full content here -->
                            <div id="div3" class="hidden">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h2 class=" fw-bold pt-4">Empower Your Business with Innovative Applications</h2>
                                        <p class="common-paragraph pt-2">Optimize Efficiency and User Experience: Tailored
                                            Application Solutions to Boost Your Business Operations. Explore Our Expertise
                                            Today, Embrace Innovation, Transform Your Future, and Achieve Success.</p>

                                        <div class="buttons mt-5">
                                            <button id="btn13" class="active-button d-block"
                                                onclick="NestedshowDiv(13)"><span>1</span>Website Development</button>
                                            <button class="d-block" id="btn14"
                                                onclick="NestedshowDiv(14)"><span>2</span>Android Development</button>
                                            <button class="d-block" id="btn15"
                                                onclick="NestedshowDiv(15)"><span>3</span>IOS Development</button>
                                            <button class="d-block" id="btn16"
                                                onclick="NestedshowDiv(16)"><span>4</span>Functional Web
                                                Development</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="div13" class="active">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/web development.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div14" class="hidden">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/android.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div15" class="hidden">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/ios.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div16" class="hidden">
                                            <picture>

                                                <img class="w-100"
                                                    src="{{ asset('/') }}frontend/assets/images/service/custom web.png"
                                                    alt="">
                                            </picture>
                                            <div class="service_progress">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Estimate cost for sender</h5>
                                                        <div class="progress" role="progressbar"
                                                            aria-label="Danger example" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                                                        </div>
                                                        <div
                                                            class="bottom_amount mt-3 d-flex justify-content-between text-end">
                                                            <h4>290$</h5>
                                                                <h4>460$<br><span class="fs-6">total amount</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- digital outreach buttons full content here -->

                            <div id="div4" class="hidden">Div 4 is hidden</div>

                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ==============================
        clients section starts from here
           ================================= -->


    <div id="clients" class="clients section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row clients_logo">
                        <div class="col-lg-6"><img class="w-100 pt-2"
                                src="{{ asset('/') }}frontend/assets/images/clients/Agisolinc.png" alt=""
                                srcset=""></div>
                        <div class="col-lg-6"><img class="w-100 pt-2"
                                src="{{ asset('/') }}frontend/assets/images/clients/Cinebirds.png" alt=""
                                srcset=""></div>
                        <div class="col-lg-6"><img class="w-100 pt-5"
                                src="{{ asset('/') }}frontend/assets/images/clients/Hilwotech.png" alt=""
                                srcset=""></div>
                        <div class="col-lg-6"><img class="w-100 pt-5"
                                src="{{ asset('/') }}frontend/assets/images/clients/Manpower.png" alt=""
                                srcset=""></div>
                        <div class="col-lg-6"><img class="w-100 pt-5"
                                src="{{ asset('/') }}frontend/assets/images/clients/Marketing Mighty.png"
                                alt="" srcset=""></div>
                        <div class="col-lg-6"><img class="w-100 pt-5"
                                src="{{ asset('/') }}frontend/assets/images/clients/Vantower.png" alt=""
                                srcset=""></div>

                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="content">
                        <h2 class="common-heading">Clients Who Trust Us</h2>
                        <p class="clients_p pe-5 pt-4">Discover how our valued clients' experiences exemplify our
                            unwavering com mitment and unmatched expertise in the industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ===================================
                                        satisfaction section starts from here
                                         ======================================== -->


    <div id="satisfaction" class="satisfaction section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top_heading text-center">
                        <h2 class="common-heading">Voices of Satisfaction</h2>
                        <span class="common-paragraph pt-4">Words of Appreciation from Our Clients</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main">

                        <div id="slider-container">
                            <div id="slider-content" style="transform: translateX(-2200px);">
                                <div class="slider-item d-flex">
                                    <div class="img">
                                        <img src="{{ asset('/') }}frontend/assets/images/satisfaction/satisfaction.png"
                                            alt="">
                                    </div>
                                    <div class="content d-flex align-items-center">
                                        <div class="flx">
                                            <span>Woah</span>
                                            <p class="pe-5 pt-2">The service was absolutely impeccible. I see myself and my
                                                family visiting to a here much more frequently. Also they provide so much
                                                respect. The service was amazing. I never had to wait that long for my food.
                                            </p>
                                            <p class="pt-4"><b>Emma Macstone</b><br>SomeCompany LLC.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item d-flex">
                                    <div class="img">
                                        <img src="{{ asset('/') }}frontend/assets/images/satisfaction/satisfaction.png"
                                            alt="">
                                    </div>
                                    <div class="content d-flex align-items-center">
                                        <div class="flx">
                                            <span>Woah</span>
                                            <p class="pe-5 pt-2">The service was absolutely impeccible. I see myself and my
                                                family visiting to a here much more frequently. Also they provide so much
                                                respect. The service was amazing. I never had to wait that long for my food.
                                            </p>
                                            <p class="pt-4"><b>Emma Macstone</b><br>SomeCompany LLC.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item d-flex">
                                    <div class="img">
                                        <img src="{{ asset('/') }}frontend/assets/images/satisfaction/satisfaction.png"
                                            alt="">
                                    </div>
                                    <div class="content d-flex align-items-center">
                                        <div class="flx">
                                            <span>Woah</span>
                                            <p class="pe-5 pt-2">The service was absolutely impeccible. I see myself and my
                                                family visiting to a here much more frequently. Also they provide so much
                                                respect. The service was amazing. I never had to wait that long for my food.
                                            </p>
                                            <p class="pt-4"><b>Emma Macstone</b><br>SomeCompany LLC.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add more slides as needed -->
                            </div>
                        </div>
                        <div class="config d-flex justify-content-center mt-5 align-items-center">
                            <div class="me-5"><button id="prevBtn">&lt;</button></div>
                            <div class="dot-container">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot active"></div>
                                <!-- Add more dots as needed -->
                            </div>
                            <div class="ms-5"><button id="nextBtn">&gt;</button></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ===============================
         contact section starts from here
         ================================== -->
@endsection
