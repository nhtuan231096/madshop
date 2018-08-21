@extends('layouts.admin')

@section('main')

<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Form edit product</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form">


				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" value="{{$pro->name}}" placeholder="Input field">
					@if($errors->has('name'))
						<div style="color:red; font-style:italic;" class="help-block">
							{{$errors->first('name')}}
						</div>
					@endif
				</div>

				<div class="form-group">
					<label for="">Description</label>
					<input type="text" class="form-control" name="description" value="{{$pro->description}}" placeholder="Input field">
					@if($errors->has('description'))
						<div style="color:red; font-style:italic;" class="help-block">
							{{$errors->first('description')}}
						</div>
					@endif
				</div>

				<div class="form-group">
					<label for="">Category</label>
					<select name="category_id" class="form-control" required="required">
						<option value="{{$pro->category_id}}">{{$pro->category_id}}</option>
						@foreach($cate as $c)
						<option value="{{$c->id}}">{{$c->name}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="">Price</label>
					<input type="text" class="form-control" name="price" value="{{$pro->price}}" placeholder="Input field">
					@if($errors->has('price'))
						<div style="color:red; font-style:italic;" class="help-block">
							{{$errors->first('price')}}
						</div>
					@endif
				</div>

				<div class="form-group">
					<label for="">Sale Price</label>
					<input type="text" class="form-control" name="sale_price" value="{{$pro->sale_price}}" placeholder="Input field">
					@if($errors->has('sale_price'))
						<div style="color:red; font-style:italic;" class="help-block">
							{{$errors->first('sale_price')}}
						</div>
					@endif
				</div>
				
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				

				<button type="submit" class="btn btn-primary">Edit</button>
			</form>
	</div>
</div>

@stop()