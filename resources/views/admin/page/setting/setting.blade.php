@extends('admin.layout.master')
@push('title')
  Setting
@endpush
@section('body')
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Pages</a>
    <span class="breadcrumb-item active">Setting</span>
  </nav>
  <div class="sl-pagebody">
    <div class="row mx-auto">
      <div class="col-md-8 mx-auto my-4">
        <h4 class="text-center">Genaral Setting</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <form action="{{route('setting.update',1)}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="AppName" class="col-md-2 col-form-label">App Name</label>
            <div class="col-md-10">
              <input type="text" name="app_name" class="form-control" id="AppName" value="{{isset($setting->app_name)?$setting->app_name:'' }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="Address" class="col-md-2 col-form-label">Address</label>
            <div class="col-md-10">
              <input type="text" name="address" class="form-control" id="Address" value="{{isset($setting->address)?$setting->address:''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="Phone" class="col-md-2 col-form-label">Phone</label>
            <div class="col-md-10">
              <input type="text" name="phone" class="form-control" id="Phone" value="{{isset($setting->phone)?$setting->phone:''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="Email" class="col-md-2 col-form-label">Email</label>
            <div class="col-md-10">
              <input type="text" name="email" class="form-control" id="Email" value="{{isset($setting->email)?$setting->email:'' }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="MetaKeyWord" class="col-md-2 col-form-label">Meta KeyWord</label>
            <div class="col-md-10">
              <input type="text" name="meta_keyword" class="form-control" id="MetaKeyWord" value="{{isset($setting->meta_keyword)?$setting->meta_keyword:''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="MetaDescription" class="col-md-2 col-form-label">Meta Description</label>
            <div class="col-md-10">
              <textarea class="form-control" name="meta_description" id="MetaDescription" rows="4">{{isset($setting->meta_description)?$setting->meta_description:''}}</textarea>  
            </div>
          </div>
          <div class="form-group row">
            <label for="facebook" class="col-md-2 col-form-label">Facebook</label>
            <div class="col-md-10">
              <input type="text" name="facebook" class="form-control" id="facebook" value="{{isset($setting->facebook)?$setting->facebook:''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="twitter" class="col-md-2 col-form-label">Twitter</label>
            <div class="col-md-10">
              <input type="text" name="twitter" class="form-control" id="twitter" value="{{isset($setting->twitter)?$setting->twitter:'' }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="instragram" class="col-md-2 col-form-label">Instragram</label>
            <div class="col-md-10">
              <input type="text" name="instragram" class="form-control" id="instragram" value="{{isset($setting->instragram)?$setting->instragram:''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="linkedIn" class="col-md-2 col-form-label">Linked In</label>
            <div class="col-md-10">
              <input type="text" name="linked_in" class="form-control" id="linkedIn" value="{{isset($setting->linked_in)?$setting->linked_in:'' }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="tiktok" class="col-md-2 col-form-label">Tik Tok</label>
            <div class="col-md-10">
              <input type="text" name="tiktok" class="form-control" id="tiktok" value="{{isset($setting->tiktok)?$setting->tiktok:'' }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="Logo" class="col-md-2 col-form-label"></label>
            <div class="col-md-4">
              <strong>Site Logo</strong>
              <img src="{{asset(isset($setting->site_logo)?$setting->site_logo:'')}}" height="50" width="80" alt="Site Logo">
            </div>
            <div class="col-md-4">
              <strong>Fav Icon</strong>
              <img src="{{asset(isset($setting->fav_icon)?$setting->fav_icon:'')}}" height="50" width="50" alt="Fav Icon">
            </div>
          </div>

          <div class="form-group row">
          <label for="Logo" class="col-md-2 col-form-label">Logo</label>
            <div class="col-md-4">
              <input type="file" name="site_logo" class="form-control" >
            </div>
            <div class="col-md-4">
              <input type="file" name="fav_icon" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
          <label for="submit" class="col-md-2 col-form-label"></label>
          <div class="col-md-10">
            <input type="submit" name="submit" class="btn btn-success" id="submit" value="submit">
          </div>
        </div>
    
        </form>
      </div>
    </div>
  </div>
@endsection