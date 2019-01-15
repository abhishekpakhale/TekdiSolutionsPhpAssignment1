@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Siswa</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>user Name: </strong> {{$userdetail->name}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Country : </strong> {{$userdetail->country}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Email Address : </strong> {{$userdetail->email_address}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Mobile Number : </strong> {{$userdetail->mobile_number}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Birth Date : </strong> {{$userdetail->birth_date}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>About You : </strong> {{$userdetail->about_you}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('userdetail.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection