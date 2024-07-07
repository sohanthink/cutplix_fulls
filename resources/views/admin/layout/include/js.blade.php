<script src="{{asset('admin/assets/js/jquery.js')}}"></script>
<script src="{{asset('admin/assets/js/popper.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.js')}}"></script>
<script src="{{asset('admin/assets/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{asset('admin/assets/js/select2.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('admin/assets/js/starlight.js')}}"></script>
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