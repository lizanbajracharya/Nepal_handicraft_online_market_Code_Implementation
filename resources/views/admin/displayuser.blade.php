@extends('admin.sidebar')

@section('content')
<h2 class="text-center py-2">User Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Usertype</th>
                        <th>Status</th>
                        <th>Manage Status</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->Firstname}}</td>
                <td>{{$user->Lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->Address}}</td>
                <td>{{$user->UserType}}</td>
                <td>{{$user->Status}}</td>
                <td>
                <a href="{{ route('manageuser.edit',['id'=>$user->id])}}">Manage Status</a></td>
                <td>
                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deleting the data??</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are u sure?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" href="{{ route('manageuser.destroy',['id'=>$user->id]) }}"
                  onclick="event.preventDefault();
                  document.getElementById('delete-form').submit();">Delete</button>

          <form id="delete-form" action="{{ route('manageuser.destroy',['id'=>$user->id]) }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
          </form>
        </div>
      </div>
    </div>
  </div>
                        </td>
            </tr>
            @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>

@endsection