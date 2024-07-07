@extends('admin.layout.master')
@push('title')
  User
@endpush
@section('body')
  <nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">User</span>
  </nav>
  <div class="sl-pagebody">
      <div class="row">
        <div class="container">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h2>All user</h2>
              <a class="btn btn-success" href="{{route('user.create')}}">Create User</a>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>
                      <div class="rounded-circle" style="height: 40px;width: 40px;line-height: 40px;border: 1px solid gray;">
                        <img class="w-100" src="{{asset($user->image)}}" class="rounded" alt="">
                      </div>  
                    </th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                      <a title="Delete" href="{{route('user.delete',$user->id)}}" onclick="return confirm('Are you sure to Delete This?')" class="btn btn-danger"><i class="icon ion-trash-b"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="card-footer">
                {{ $users->links() }}
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
  </div>
@endsection
