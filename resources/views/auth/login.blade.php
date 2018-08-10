@extends('layouts.login')
@section('content')

<form role="form" method="POST">
  <hr />
  <h5>Enter Details to Login</h5>
  <br />
    <div class="form-group input-group">
      <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
        <input type="text" name="email" class="form-control" placeholder="Your Email " />
    </div>
    <div class="form-group input-group">
      <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
      <input type="password" name="password" class="form-control"  placeholder="Your Password" />
      </div>
    <div class="form-group">
      <label class="checkbox-inline">
        <input type="checkbox" /> Remember me
      </label>
        <span class="pull-right">
          <a href="index.html" >Forget password ? </a> 
        </span>
    </div>
    <!-- <a type="" class="btn btn-primary">Login Now</a> -->
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="submit" value="Login" class="btn btn-primary"/>

@stop()
