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
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="form-group">
            <h4>Change Password</h4>
          </div>
          <form action="{{route('update.password')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <input type="password" class="form-control" name="old_password"  placeholder="Enter your old password">
            @if ($errors->has('old_password'))
            <span class="text-danger">{{ $errors->first('old_password') }}</span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="new_password"  placeholder="Enter your new password">
            @if ($errors->has('new_password'))
            <span class="text-danger">{{ $errors->first('new_password') }}</span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation"  placeholder="Enter your confirm password">
            @if ($errors->has('password_confirmation'))
            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Change Password">
          </div>
        </form>
        </div>
      </div>
    </div>  
  </div>
@endsection