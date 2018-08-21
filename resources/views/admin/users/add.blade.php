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
					<!-- @if($errors->has('name'))
						<div style="color:red; font-style:italic;" class="help-block">
							{{$errors->first('name')}}
						</div>
					@endif -->
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" id="slug">
				</div>
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="text" class="form-control" name="description" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">Quyền hạn</label>
					<input type="text" class="form-control" name="permission" placeholder="Input field">

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
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button type="submit" class="btn btn-primary">Add</button>
			</form>
	</div>

</div>

@stop()