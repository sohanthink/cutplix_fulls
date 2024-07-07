<div id="footer" class="footer">
  <div class="container">
      <div class="main">
          <div class="row">
              <div class="col-lg-3">
                  <ul>
                      <li class="pb-4"><b>Reach Us</b></li>
                      <li><i class="fa-solid fa-phone-volume pe-3"></i>{{($setting->phone)?$setting->phone:''}}</li>
                      <li class="py-4"><i class="fa-regular fa-envelope pe-3"></i>{{($setting->email)?$setting->email:''}}</li>
                      <li><i class="fa-solid fa-location-dot pe-3"></i>{{($setting->address)?$setting->address:''}}</span></li>
                  </ul>
              </div>
              <div class="col-lg-3">
                  <ul>
                      <li class="pb-4"><b>Company</b></li>
                      <li class="pb-3">Services</li>
                      <li class="pb-3">Portfolio</li>
                      <li class="pb-3">Carrer</li>
                      <li class="pb-3">Learn</li>
                  </ul>
              </div>
              <div class="col-lg-3">
                  <ul>
                      <li class="pb-4"><b>Legal</b></li>
                      <li class="pb-3">Privacy Policy</li>
                      <li class="pb-3">Terms and Services</li>
                      <li class="pb-3">Terms of Use</li>
                      <li class="pb-3">Refund Policy</li>
                  </ul>
              </div>
              <div class="col-lg-3">
                  <div class="content">
                      <h3 class="pb-2">Join Our Newsletter</h3>
                      <form action="">
                          <div class="d-flex">
                              <div class="col-auto">
                                  <label for="inputPassword2" class="visually-hidden">Email</label>
                                  <input type="password" class="form-control footer_frm" id="inputPassword2" placeholder="Enter Your Email">
                                </div>
                                <div class="col-auto">
                                  <button type="submit" class="footer_btn mb-3">Subscribe</button>
                                </div>
                          </div>
                      </form>
                      <p class="pt-2">*  Will send you weekly updates for your better tool management.</p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 copyright">
                  <p class="text-center common-paragraph">Copyright © <a href="{{route('home')}}">{{($setting->app_name)?$setting->app_name:'Portfolio'}}</a>{{date("Y")}}. All rights reserved</p>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Include Bootstrap JavaScript at the end of the body tag to ensure proper functionality -->
<script src="{{asset('/')}}frontend/assets/js/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('/')}}frontend/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}frontend/assets/js/index.js"></script>
@stack('script')
  @if(Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
    {{ Session::forget('success') }}
@endif

@if(Session::has('error'))
    <script>
        toastr.error("{{ Session::get('error') }}");
    </script>
    {{ Session::forget('error') }}
@endif
@if(Session::has('warning'))
    <script>
        toastr.error("{{ Session::get('warning') }}");
    </script>
    {{ Session::forget('warning') }}
@endif
</body>
</html>