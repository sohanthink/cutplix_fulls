@extends('admin.layout.master')
@push('title')
  Add user
@endpush
@section('body')
<nav class="breadcrumb sl-breadcrumb">
  <a class="breadcrumb-item" href="{{route('user.index')}}">User</a>
  <span class="breadcrumb-item active">Add User</span>
</nav>

<div class="sl-pagebody">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-header text-center">
            <div class="h4">
              Add a user
            </div>
          </div>
          <div class="card-body">
            <form action="{{route('user.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter Name">
                @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div><!-- form-group -->
              <div class="form-group">
                <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter Email">
                @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div><!-- form-group -->
              <div class="form-group">
                <input type="password" name="password"  class="form-control" placeholder="Enter  password">
                @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
              </div><!-- form-group -->
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Re enter password">
                @if ($errors->has('password_confirmation'))
                  <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
              </div><!-- form-group -->
              <button type="submit" class="btn btn-info btn-block">Create</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- sl-pagebody -->
@endsection