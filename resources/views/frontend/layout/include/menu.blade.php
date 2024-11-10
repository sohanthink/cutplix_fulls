<section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="left">
                <a class="navbar-brand d-block" href="#">
                    @if ($setting->site_logo !== null)
                        <a href="{{ route('home') }}" class="logo"><img src="{{ asset($setting->site_logo) }}"
                                alt=""></a>
                        <!--<a href="{{ route('home') }}" class="navbar-brand d-block"><img src="{{ asset($setting->site_logo) }}" alt="cutplix"></a>-->
                    @else
                        <a href="{{ route('home') }}" class="logo">
                            <h2>PortFolio.</h2>
                        </a>
                    @endif
                </a>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
            </div>

            <div class="middle">
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item me-4">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="{{ route('home') }}#service">Service</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="{{ route('user.portfolio') }}">Portfolio</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.carrer') }}">Career</a>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <div class="right">
                {{-- <a href="{{ route('user.learn') }}" class="primary_btn me-3">Learn</a> --}}
                <a href="#contact" class="secondary_btn">Get in Touch</a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>
    </nav>
</section>
