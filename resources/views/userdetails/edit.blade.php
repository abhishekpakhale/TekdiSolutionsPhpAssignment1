@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit User detail</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('userdetail.update',$userdetail->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Name :</strong>
          <input type="text" name="fullname" class="form-control" value="{{$userdetail->name}}">
        </div>

        <div class="col-md-12">
          <strong>country:</strong>
          <input type="text" name="country" class="form-control" value="{{$userdetail->country}}">
        </div>

       <div class="col-md-12">
          <strong>Email Address:</strong>
          <input type="text" name="emailaddress" class="form-control" value="{{$userdetail->email_address}}">
        </div>

         <div class="col-md-12">
          <strong>Mobile Number:</strong>
          <input type="text" name="mobilenumber" class="form-control" value="{{$userdetail->mobile_number}}">
        </div>

        <div class="col-md-12">
          <strong>About You:</strong>
         <textarea class="form-control" name="about_you" rows="8" cols="80">{{$userdetail->about_you}}</textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('userdetail.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection