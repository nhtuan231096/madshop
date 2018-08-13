@extends('layouts.admin')

@section('main')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">List product</h3>
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Image</th>
					<th>Price</th>
					<th>Sale_price</th>
					<th>Category</th>
					<th>Description</th>
					<th>Created_at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($product as $k => $pro)
				<tr>
					<td>{{$k+1}}</td>
					<td>{{$pro->name}}</td>
					<td>
						<img src="{{url('uploads')}}/{{$pro->image}}" width="50">
					</td>
					<td>{{$pro->price}}</td>
					<td>{{$pro->sale_price}}</td>
					<td>{{$pro->cat->name}}</td>
					<td>{{$pro->description}}</td>
					<td>{{$pro->created_at}}</td>
					<td>
						@if($pro->status == 1)
							<span class="label label-primary">In Public</span>
						@else
							<span class="label label-danger">Pending</span>
						@endif
					</td>
					<td>
						<a class="btn btn-success btn-xs fa fa-edit" href="{{route('editPro',['id'=>$pro->id])}}"></a>
						<a class="btn btn-danger btn-xs fa fa-remove" onclick="return confirm('you sure delete it')" href="{{route('deletePro',['id'=>$pro->id])}}"></a>
					</td>
				</tr>
				@endforeach()
			</tbody>
		</table>
	</div>
</div>
@stop()