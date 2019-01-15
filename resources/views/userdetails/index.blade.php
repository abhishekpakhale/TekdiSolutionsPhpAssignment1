@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Users Details</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('userdetail.create') }}">Create New User</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th><b>No.</b></th>
        <th>User Name</th>
        <th>Contry</th>
        <th>Email Address</th>
        <th>Mobile Number</th>
        <th>Date of birth</th>
        <th>About You</th>
        <th>Action</th>
      </tr>

      @foreach ($userdetails as $userdetail)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$userdetail->name}}</td>
          <td>{{$userdetail->country}}</td>
          <td>{{$userdetail->email_address}}</td>
          <td>{{$userdetail->mobile_number}}</td>
          <td>{{$userdetail->birth_date}}</td>
          <td>{{$userdetail->about_you}}</td>
          <td>
            <form action="{{ route('userdetail.destroy', $userdetail->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('userdetail.show',$userdetail->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('userdetail.edit',$userdetail->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $userdetails->links() !!}
  </div>
@endsection