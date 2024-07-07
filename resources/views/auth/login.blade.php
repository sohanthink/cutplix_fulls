
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

    <title>Log In |</title>

    <!-- vendor css -->
    <link href="{{asset('/admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/assets/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/starlight.css')}}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse"> Cutflix <span class="tx-info tx-normal">admin</span></div>

        @if (Session::has('error'))
        <div class="text-danger">
            {{ Session::get('error') }}
        </div>
      @endif
      <form action="{{route('login.user')}}" method="post">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter your username">
          @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Enter your password">
           @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
      </form>
        {{-- <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div> --}}
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('admin/assets/js/jquery.js')}}"></script>
    <script src="{{asset('admin/assets/js/popper.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.js')}}"></script>

  </body>
</html>
