@extends('frontend.layout.master')
@push('title')
  Portfolio
@endpush
@section('body')
<div id="carrer_banner" class="carrer_banner">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 centered-div">
              <div class="carrer_banner_text">
                  <h2 class="carrer_heading"><span>Join a group</span> of </br>visionaries, innovators,<br> and achievers.</h2>
                  <div class="primary-btn"><a href="#">Apply Now</a></div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="img">
                  <picture>
                      <img class="w-100" src="{{asset('/')}}frontend/assets/images/carrer_banner/Image.png" alt="Hands On glove">
                  </picture>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection