<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-scrolled">
  <div class="container d-flex align-items-center justify-content-between">
    @if ($setting->site_logo !== null)
    <a href="{{route('home')}}" class="logo"><img height="50px" src="{{asset($setting->site_logo)}}" alt="" class="img-fluid"></a>
    @else
    <a href="{{route('home')}}" class="logo">
      <h2>PortFolio.</h2>
    </a>
    @endif
    <!-- Uncomment below if you prefer to use an text logo -->
    <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

    <nav id="navbar" class="navbar">
      @include('frontend.layout.include.menu')
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->