@extends('layouts.main')
@section('main')
<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<form action="" method="POST" role="form">
							<legend>Register</legend>
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" name="name" class="form-control" id="" placeholder="Input field">
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" name="email" class="form-control" id="" placeholder="Input field">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control" id="" placeholder="Input field">
							</div>
							{{csrf_field()}}
							
							<button type="submit" class="btn btn-primary">Register</button>
						</form>
					
					
						
					</div>
				</div>
			
			
				
			</div>
		</div>


@stop()