@extends('auth.layout')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb text-center">
      <h2>User Registration</h2>
  </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input. <br><br>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('user#storeUser') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col-xs-12 col-sm-2 col-md-3"></div>
    <div class="col-xs-12 col-sm-8 col-md-6">
      <div class="form-group">
        <strong>Name : </strong>
        <input type="text" name="name" class="form-control" placeholder="Name">
      </div>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-3"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-2 col-md-3"></div>
    <div class="col-xs-12 col-sm-8 col-md-6">
      <div class="form-group">
        <strong>Email : </strong>
        <input type="text" name="email" class="form-control" placeholder="Email">
      </div>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-3"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-2 col-md-3"></div>
    <div class="col-xs-12 col-sm-8 col-md-6">
      <div class="form-group">
        <strong>Password : </strong>
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-3"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-2 col-md-3"></div>
    <div class="col-xs-12 col-sm-8 col-md-6 text-center">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-3"></div>
  </div>
</form>

@endsection