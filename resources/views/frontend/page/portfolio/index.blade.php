@extends('frontend.layout.master')
@push('title')
    Portfolio
@endpush
@section('body')
    <main id="main">
        <div id="portfolio_section" class="portfolio section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top_heading text-center">
                            <h2 class="common-heading">Portfolio</h2>
                            <span class="common-paragraph pt-4">Browsing Through Our Creative Portfolio Showcase</span>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <div class="portfolio_slider">
                            <div class="topbar text-center mt-5">
                                <button id="btn11" class="active-button" onclick="PshowDiv(11)">Commercial</button>
                                <button id="btn12" onclick="PshowDiv(12)">Real estate</button>
                                <button id="btn13" onclick="PshowDiv(13)">Short Film</button>
                                <button id="btn14" onclick="PshowDiv(14)">Music Video</button>
                                <button id="btn15" onclick="PshowDiv(15)">Reels</button>
                                <button id="btn16" onclick="PshowDiv(16)">Social Media </button>
                            </div>

                            {{-- commercial categories video --}}
                            <div id="div11" class="active">
                                <div class="portfolio_video">
                                    <div class="row">
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/4On23gcCQ18"
                                                title="Y80 ultra smart watch commercial⌚ | Cutplix  | Tech Shorts |@Kausarthemaker"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/_WOKuwTsmZ4"
                                                title="Perfume Product Commercial - Cutplix" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/SZ8rvGSpJ4E"
                                                title="Ultra probiotic yogurt drink Commercial - Cutplix" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/bwnhWBNR2eM"
                                                title="Y80 ultra smart watch commercial⌚ | Cutplix  | Tech Shorts |@Kausarthemaker"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- real estate categories video --}}
                            <div id="div12" class="hidden">
                                <div class="portfolio_video">
                                    <div class="row">
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/m-x7cFJSiXs"
                                                title="Jonmo (জন্ম) | Nirjon Nahuel | Nazia | New Bangla Natok 2022 | CINEBIRDS | Full Natok"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- short film categories video --}}
                            <div id="div13" class="hidden">
                                <div class="portfolio_video">
                                    <div class="row">
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/m-x7cFJSiXs"
                                                title="Jonmo (জন্ম) | Nirjon Nahuel | Nazia | New Bangla Natok 2022 | CINEBIRDS | Full Natok"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/8_eJz3nSup4"
                                                title="Sweet Candy (সুইট ক্যান্ডি) | Nirjon Nahuel | Hridita | New Bangla Natok 2022 | CINEBIRDS"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/MfoeDPZjbrI"
                                                title="Ei Vab Ei Ari (এই ভাব এই আড়ি) | Nirjon Nahuel | Nazia Borsha | Hridita | Bangla Natok | CINEBIRDS"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/ECEhJ8aN0AE"
                                                title="Harami (হারামি) | Nirjon Nahuel | Bangla Short Film 2021 | CINEBIRDS | Bangla Action Short Film 2021"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/lwU_bsflSnk"
                                                title="Guru Express (গুরু এক্সপ্রেস) | Nirjon Nahuel | Bangla New Natok 2022 | DURBIN | Full Natok"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/m_ECE0Ev5xI"
                                                title="Icche Pahar (ইচ্ছে পাহাড়) | Nirjon Nahuel | Nazia | Bangla New Natok 2022 | DURBIN | Full Natok"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/ookUZy87BKQ"
                                                title="Money Twist (মানি টুইস্ট) | Nirjon Nahuel | Nazia | Nafiz | Bangla Natok 2022 | DURBIN | Full Natok"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/gSFEMlk6E2A"
                                                title="Blind | Nirjon Nahuel | Nazia | Bangla Short Film 2022 | Love Story 2022 | CINEBIRDS"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/IwOCalz3mOw"
                                                title="Love Triangle (লাভ ট্রায়াঙ্গেল) | Nirjon Nahuel | Nazia Borsha | Bangla New Natok 2023 | DURBIN"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- music video categories video --}}
                            <div id="div14" class="hidden">
                                <div class="portfolio_video">
                                    <div class="row">
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/RjyZ4LdIUI4"
                                                title="Ganjam |গ্যাঞ্জাম| Guerrillaz of Dhaka || Tribute to DESHIMCs|BanglaRap-2024| (OFFICIAL MUSIC VIDEO)"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/QIZrikQhE-M"
                                                title="Oshohay (অসহায়) | Love Triangle OST | Nirjon Nahuel | Rupak Tiary | Nazia Borsha | Bengali Song 2023"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/o76p4D_AyAw"
                                                title="Harami (হারামি) | Title Track | Nirjon Nahuel | Bangla Rap Song 2021 | Bangla Hip Hop | CINEBIRDS"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/uUg0scqcyfc"
                                                title="Two percent | Tanjib Sarowar Feat. JD X HRT | Rap Song 2024"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- reels categories video --}}
                            <div id="div15" class="hidden">
                                <div class="portfolio_video2">
                                    <div class="row">
                                        <div class="col-lg-3 mt-5">
                                            <iframe width="69%" height="500px"
                                                src="https://www.youtube.com/embed/CvRDjhxFiSM"
                                                title="GET UP AND GRIND | CUTPLIX" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-3 mt-5">
                                            <iframe width="69%" height="500px"
                                                src="https://www.youtube.com/embed/FDdooYzBj_4" title="jim podcast shorts"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-3 mt-5">
                                            <iframe width="69%" height="500px"
                                                src="https://www.youtube.com/embed/7fi8utBWXyY" title="jim podcast shorts"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-3 mt-5">
                                            <iframe width="69%" height="500px"
                                                src="https://www.youtube.com/embed/ShD4nPS0MMQ" title="jim podcast shorts"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-3 mt-5">
                                            <iframe width="69%" height="500px"
                                                src="https://www.youtube.com/embed/KyryPQVHpZc" title="jim podcast shorts"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-3 mt-5">
                                            <iframe width="69%" height="500px"
                                                src="https://www.youtube.com/embed/hhmyt9QYfG8"
                                                title="Inside Salesforce: Jim Stoltzfus on Partnering with Micronetbd for Enterprise Success"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-lg-3 mt-5">
                                            <iframe width="69%" height="500px"
                                                src="https://www.youtube.com/embed/W_kjIj1-6rs"
                                                title="George Ayub X Micronetbd  Shorts 2" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- socioal media categories video --}}
                            <div id="div16" class="hidden">
                                <div class="portfolio_video">
                                    <div class="row">
                                        <div class="col-lg-4 mt-5">
                                            <iframe width="100%" height="250px"
                                                src="https://www.youtube.com/embed/m-x7cFJSiXs"
                                                title="Jonmo (জন্ম) | Nirjon Nahuel | Nazia | New Bangla Natok 2022 | CINEBIRDS | Full Natok"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 centered-div mt-5">
                        <a href="#" class="primary_btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>


    </main><!-- End #main -->
@endsection
