
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @php
      $setting = global_setting();
    @endphp
    @include('admin.layout.include.meta')
    <title>@stack('title') | {{$setting->app_name}}</title>
    <!-- vendor css -->
    @include('admin.layout.include.css')
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo">
      <a href="{{ url('admin/dashboard') }}"><img height="50" src="{{asset($setting->site_logo)}}" alt=""> </a>
    </div>
    @include('admin.layout.include.leftPanel')
    <!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.layout.include.rightPanel')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('admin.layout.include.header')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      @yield('body')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @include('admin.layout.include.js')
  </body>
</html>
