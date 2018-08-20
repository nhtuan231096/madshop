@extends('layouts.admin')

@section('main')

<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Form add product</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" placeholder="Input field">
					@if($errors->has('name'))
						<div style="color:red; font-style:italic;" class="help-block">
							{{$errors->first('name')}}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Slug</label>
					<input type="text" class="form-control" name="slug" id="slug">
				</div>
				<div class="form-group">
					<label for="">Description</label>
					<!-- <input type="text" class="form-control" name="description" placeholder="Input field">
					@if($errors->has('description'))
						<div style="color:red; font-style:italic;" class="help-block">
							{{$errors->first('description')}}
						</div>
					@endif -->
					<textarea type="text" class="form-control" name="description" placeholder="Input field" id="textarea">
						@if($errors->has('description'))
							<div style="color:red; font-style:italic;" class="help-block">
								{{$errors->first('description')}}
							</div>
						@endif
					</textarea>
				</div>

				<div class="form-group">
					<label for="">Category</label>
					<select name="category_id" class="form-control" required="required">
						<option value="">Select a category</option>
						@foreach($cate as $c)
						<option value="{{$c->id}}">{{$c->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
                        <label>Chose Image</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                	<img src="{{asset('/public/admin')}}/img/demoUpload.jpg" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-info">
                                    	<span class="fileupload-new">Select image</span>
                                    	<span class="fileupload-exists">Change</span>
                                    	<input type="file" name="file_upload"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

				<div class="form-group">
					<label for="">Price</label>
					<input type="text" class="form-control" name="price" placeholder="Input field">
					@if($errors->has('price'))
						<div style="color:red; font-style:italic;" class="help-block">
							{{$errors->first('price')}}
						</div>
					@endif
				</div>

				<div class="form-group">
					<label for="">Sale Price</label>
					<input type="text" class="form-control" name="sale_price" placeholder="Input field">
					@if($errors->has('sale_price'))
						<div style="color:red; font-style:italic;" class="help-block">
							{{$errors->first('sale_price')}}
						</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Status</label>
					<input class="form-control" type="text" name="status" placeholder="Insert status">
				</div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button type="submit" class="btn btn-primary">Add</button>
			</form>
	</div>

</div>

@stop()