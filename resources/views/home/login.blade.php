@extends('layouts.main')
@section('main')
<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<form action="" method="POST" role="form">
							<legend>Madshop login</legend>
						
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" class="form-control" id="" placeholder="Input field">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" id="" placeholder="Input field">
							</div>
							
							
							<button type="submit" class="btn btn-primary">Login</button>
							<a class="btn btn-primary" href="{{route('homeregister')}}">Register ?</a>
						</form>
					
					
						
					</div>
				</div>
			
			
				
			</div>
		</div>


@stop()