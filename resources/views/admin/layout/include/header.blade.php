<div class="sl-header">
  <div class="sl-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
  </div><!-- sl-header-left -->
  <div class="sl-header-right">
    <a target="_blank" href="{{ url('/') }}">Website</a>
    <nav class="nav">
      <div class="dropdown">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name">{{ Auth::user()->name }}</span>
          <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-200">
          <ul class="list-unstyled user-profile-nav">
            <li><a href="{{route('edit.profile')}}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
            <li><a href="{{route('setting.index')}}"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
            <li><a href="{{route('change.password')}}"><i class="icon ion-ios-gear-outline"></i> Change Password</a></li>
            <li><a href="{{route('logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
          </ul>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </nav>
    <div class="navicon-right">
      <a id="btnRightMenu" href="" class="pos-relative">
        <i class="icon ion-ios-bell-outline"></i>
        <!-- start: if statement -->
        @if (auth()->user()->notifications->whereNull('read_at')->count() > 0)
        <span class="square-8 bg-danger"></span>
        @endif
        
        <!-- end: if statement -->
      </a>
    </div><!-- navicon-right -->
  </div><!-- sl-header-right -->
</div><!-- sl-header -->