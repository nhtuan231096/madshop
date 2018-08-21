@extends('layouts.admin')

@section('main')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">List Admin</h3>
	</div>
	<div class="panel-body">
		@if(Session::has('successs'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{Session::get('successs')}}</strong>
			</div>
		@endif
		<form action="" class="form-inline">
			<div class="form-group">
				<input type="text" name="search" class="form-control" placeholder="Search...">
			</div>
			<button type="submit" class="btn btn-primary">Search</button>
			<a href="{{route('addUsers')}}" class="btn btn-info"><i class="fa fa-plus"></i>Add User Admin</a>
		</form>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Name</th>
					<th>Image</th>
					<th>Email</th>
					<th>Permission</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($user as $k => $u)
				<tr>
					<td>{{$k+1}}</td>
					<td>{{$u->name}}</td>
					<td>
						<img src="{{url('uploads')}}/{{$u->image}}" width="50">
					</td>
					<td>{{$u->email}}</td>
					<td>{{$u->permission}}</td>
					<td>
						<a class="btn btn-success btn-xs fa fa-edit" href="{{route('editUsers',['id'=>$u->id])}}"></a>
						<a class="btn btn-danger btn-xs fa fa-remove" onclick="return confirm('you sure delete it')" href="{{route('deleteUsers',['id'=>$u->id])}}"></a>
					</td>
				</tr>
				@endforeach()
			</tbody>
		</table>
	</div>
		<div class="panel-footer">
		{{$user->links()}}
	</div>
</div>
@stop()