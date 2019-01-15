@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>User Information</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Input Error </strong><br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('userdetail.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Full Name :</strong>
          <input type="text" name="name" class="form-control" placeholder="Abhishek Pakhale">
        </div>
 
        <div class="col-md-12">
          <strong>country:</strong>
          <input type="text" name="country" class="form-control" placeholder="India">
        </div>

       <div class="col-md-12">
          <strong>Email Address:</strong>
          <input type="text" name="emailaddress" class="form-control" placeholder="xyz@gmail.coms">
        </div>

         <div class="col-md-12">
          <strong>Mobile Number:</strong>
          <input type="text" name="mobilenumber" class="form-control" placeholder="8899889988">
        </div>

        <div class="col-md-12">
          <strong>About You:</strong>
          <textarea type="textarea" name="aboutyou" class="form-control" placeholder="I am passionate about learning Laravel and Node.">
        </div>

        <div class="col-md-12">
           <strong>Birth Date:</strong>
          <input type="text" name="dateofbirth" class="form-control" placeholder="dd/mm/yyyy
          ">
        </div>
        
        <div class="col-md-12">
          <a href="{{route('userdetail.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection