@extends('admin.layout.master')
@push('title')
  Message
@endpush
@section('body')
  <nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Message</span>
  </nav>
  <div class="sl-pagebody">
      <div class="row">
        <div class="container">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>All Message</h4>
            </div>
            <div class="card-body">
              <table class="table table-striped" id="datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($messages as $message)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->message}}</td>
                    <td>
                      <a title="Delete" href="{{route('message.delete',$message->id)}}" onclick="return confirm('Are you sure to Delete This?')" class="btn btn-danger"><i class="icon ion-trash-b"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="card-footer">
                {{ $messages->links() }}
              </div>
            </div>
            
          </div>
          </div>
        </div>
      </div>
  </div>
@endsection
@push('script')
  <script>
    $('#datatable').DataTable({
      responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
      }
      });
  </script>
@endpush