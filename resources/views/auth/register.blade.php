
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{asset('/admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/assets/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/assets/Ionicons/css/select2.css')}}" rel="stylesheet">
    
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/starlight.css')}}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Professional Admin Template Design</div>

        <form action="{{route('register.user')}}" method="POST" autocomplete="off">
          @csrf
          <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter your Name">
            @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div><!-- form-group -->
          <div class="form-group">
            <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter your Email">
            @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div><!-- form-group -->
          <div class="form-group">
            <input type="password" name="password"  class="form-control" placeholder="Enter your password">
            @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
          </div><!-- form-group -->
          <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password">
            @if ($errors->has('password_confirmation'))
              <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
          </div><!-- form-group -->
          <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
          <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>
        <div class="mg-t-40 tx-center">Already have an account? <a href="{{route('login')}}" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('admin/assets/js/jquery.js')}}"></script>
    <script src="{{asset('admin/assets/js/popper.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/assets/js/select2.min.js')}}"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>