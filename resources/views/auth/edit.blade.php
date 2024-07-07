@extends('admin.layout.master')
@push('title')
  Update Profile
@endpush
@push('css')
  <style>
        .panel {
      box-shadow: none;
    }
    .panel-heading {
      border-bottom: 0;
    }
    .panel-title {
      font-size: 17px;
    }
    .panel-title > small {
      font-size: .75em;
      color: #999999;
    }
    .panel-body *:first-child {
      margin-top: 0;
    }
    .panel-footer {
      border-top: 0;
    }

    .panel-default > .panel-heading {
        color: #333333;
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.07);
    }

    form label {
        color: #999999;
        font-weight: 400;
    }

    .form-horizontal .form-group {
      margin-left: -15px;
      margin-right: -15px;
    }
    @media (min-width: 768px) {
      .form-horizontal .control-label {
        text-align: right;
        margin-bottom: 0;
        padding-top: 7px;
      }
    }

    .profile__contact-info-icon {
        float: left;
        font-size: 18px;
        color: #999999;
    }
    .profile__contact-info-body {
        overflow: hidden;
        padding-left: 20px;
        color: #999999;
    }
    .profile-avatar {
      width: 200px;
      position: relative;
      margin: 0px auto;
      margin-top: 196px;
      border: 4px solid #f3f3f3;
    }
  </style>
@endpush
@section('body')
  <div class="container bootstrap snippets bootdeys">
    <div class="row ">
      <div class="col-md-8 mx-auto">
        <div class="panel panel-default">
          <div class="panel-body text-center">
            <img src="
            @if (isset($user->image))
            {{asset($user->image)}} 
            @else https://bootdey.com/img/Content/avatar/avatar6.png               
            @endif" 
            class="img-circle profile-avatar rounded-circle" 
            alt="User avatar">
          </div>
        </div>
      </div>
    </div>  
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="form-group">
            <h4>User info</h4>
          </div>
          <form action="{{route('update.profile')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Enter your username">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="phone" value="{{$user->phone}}" placeholder="Enter your Phone">
            @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="address" value="{{$user->address}}" placeholder="Enter your address">
            @if ($errors->has('address'))
            <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
          </div>
          <div class="form-group">
            <input type="file" class="form-control" name="image">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Update">
          </div>
        </form>
        </div>
      </div>
    </div>  
  </div>
@endsection