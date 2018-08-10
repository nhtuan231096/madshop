@extends('layouts.login')
@section('title','Login Adminpanel')
@section('main')
<form method="POST">
  <hr />
  <h5>Enter Details to Login</h5>
  <br />
    <div class="form-group input-group">
      <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
        <input type="text" name="email" class="form-control" placeholder="Your Email " />
    </div>
        @if($errors->has('email'))
        <p>{{$errors->first('email')}}</p>
        @endif
    <div class="form-group input-group">
      <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
      <input type="password" name="password" class="form-control"  placeholder="Your Password" />
      </div>
      @if($errors->has('password'))
      <p>{{$errors->first('password')}}</p>
      @endif
    <div class="form-group">
      <label class="checkbox-inline">
        <input type="checkbox" /> Remember me
      </label>
        <span class="pull-right">
          <a href="index.html" >Forget password ? </a> 
        </span>
    </div>
    <!-- <a type="" class="btn btn-primary">Login Now</a> -->
    <input type="submit" value="Login" class="btn btn-primary"/>
    {{csrf_field()}}

    <hr />
    Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a> 
    </form>
@stop()