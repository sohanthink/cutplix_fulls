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
                      <button id="btn11" class="active-button" onclick="PshowDiv(11)">Media</button>
                      <button id="btn12" onclick="PshowDiv(12)">Creative</button>
                      <button id="btn13" onclick="PshowDiv(13)">Application</button>
                      <button id="btn14" onclick="PshowDiv(14)">Digital Outreach</button>
                  </div>
              
                  <div id="div11" class="active">
                      <div class="portfolio_video">
                          <div class="row">
                              <div class="col-lg-4 mt-5">
                                  <iframe width="100%" height="250px" src="https://www.youtube.com/embed/1j2YXCvTtTs" title="Naalayak / Sahil Samuel-Zakir (Official music video 4k) “Hindi Gaane”" frameborder="0" allow="accelerometer; autoplay=" 1";="" clipboard-write;="" encrypted-media;="" gyroscope;="" picture-in-picture;="" web-share"="" allowfullscreen=""></iframe>
                              </div>
                              <div class="col-lg-4 mt-5">
                                  <iframe width="100%" height="250px" src="https://www.youtube.com/embed/1j2YXCvTtTs" title="Naalayak / Sahil Samuel-Zakir (Official music video 4k) “Hindi Gaane”" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                              </div>
                              <div class="col-lg-4 mt-5">
                                  <iframe width="100%" height="250px" src="https://www.youtube.com/embed/1j2YXCvTtTs" title="Naalayak / Sahil Samuel-Zakir (Official music video 4k) “Hindi Gaane”" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                              </div>
                              <div class="col-lg-4 mt-5">
                                  <iframe width="100%" height="250px" src="https://www.youtube.com/embed/1j2YXCvTtTs" title="Naalayak / Sahil Samuel-Zakir (Official music video 4k) “Hindi Gaane”" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                              </div>
                              <div class="col-lg-4 mt-5">
                                  <iframe width="100%" height="250px" src="https://www.youtube.com/embed/1j2YXCvTtTs" title="Naalayak / Sahil Samuel-Zakir (Official music video 4k) “Hindi Gaane”" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                              </div>
                              <div class="col-lg-4 mt-5">
                                  <iframe width="100%" height="250px" src="https://www.youtube.com/embed/1j2YXCvTtTs" title="Naalayak / Sahil Samuel-Zakir (Official music video 4k) “Hindi Gaane”" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="div12" class="hidden">Div 12 is hidden</div>
                  <div id="div13" class="hidden">Div 13 is hidden</div>
                  <div id="div14" class="hidden">Div 14 is hidden</div>

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