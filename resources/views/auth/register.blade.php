@extends('layouts.register')
@section('main')
<form action="" method="POST" role="form">
	<div class="row">
		<div class="col-md-8">
			<legend>Form register</legend>

				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter name...">
					@if($errors->has('name'))
						<div class="help-block">
							{{$errors->first('name')}}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Enter email...">
					@if($errors->has('email'))
						<div class="help-block">
							{{$errors->first('email')}}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter password...">
					@if($errors->has('password'))
						<div class="help-block">
							{{$errors->first('password')}}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Confirm Password</label>
					<input type="password" class="form-control" name="confirm_password" placeholder="Enter password...">
					@if($errors->has('confirm_password'))
						<div class="help-block">
							{{$errors->first('confirm_password')}}
						</div>
					@endif
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
@stop()
