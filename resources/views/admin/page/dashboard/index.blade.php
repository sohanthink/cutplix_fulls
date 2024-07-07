@extends('admin.layout.master')
@push('title')
  Blank
@endpush
@section('body')
<nav class="breadcrumb sl-breadcrumb">
  <span class="breadcrumb-item active">DashBoard</span>
</nav>

<div class="sl-pagebody">
  <div class="sl-page-title">
   <div class="row">
    <div class="col-lg-10 m-auto">
      <div class="row row-sm">
        <div class="col-sm-6 col-xl-6">
          <div class="card pd-20 bg-primary">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Messages</h6>
              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
              <h3 class="mg-b-0 tx-white tx-bold">{{App\Models\Message::get()->count()}}</h3>
            </div><!-- card-body -->
           
          </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-6">
          <div class="card pd-20 bg-warning">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Users</h6>
              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
              <h3 class="mg-b-0 tx-white tx-bold">{{App\Models\User::get()->count()}}</h3>
            </div><!-- card-body -->
           
          </div><!-- card -->
        </div><!-- col-3 -->
      </div>
    </div>
   </div>
  </div><!-- sl-page-title -->
</div><!-- sl-pagebody -->
@endsection