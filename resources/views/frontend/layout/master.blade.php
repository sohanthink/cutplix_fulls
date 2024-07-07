<!DOCTYPE html>
<html lang="en">
<head>
    @php
    $setting = global_setting(); 
    @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{($setting->meta_description)?$setting->meta_description:''}}" name="description">
    <meta content="{{($setting->meta_keyword)?$setting->meta_keyword:''}}" name="keywords">
    <!-- Favicons -->
    @if ($setting->fav_icon !== null)
    <link href="{{asset($setting->fav_icon)}}" rel="icon">
    @else
    <h2>PortFolio.</h2>
    @endif
    <title>@stack('title') | {{($setting->app_name)?$setting->app_name:'Portfolio'}}</title>

    <!-- Include Bootstrap CSS -->
    <link href="{{asset('/')}}frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}frontend/assets/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="{{asset('/')}}frontend/assets/css/style.css" rel="stylesheet">
</head>
<body>
@include('frontend.layout.include.menu')

@yield('body')


    <!-- =============================== 
        footer section starts from here
    ================================== -->

@include('frontend.layout.include.say')
@include('frontend.layout.include.footer')
