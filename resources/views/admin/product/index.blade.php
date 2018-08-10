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
					<th>Price</th>
					<th>Sale_price</th>
					<th>Category</th>
					<th>Description</th>
					<th>Created_at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($product as $pro)
				<tr>
					<td>{{$pro->id}}</td>
					<td>{{$pro->name}}</td>
					<td>{{$pro->price}}</td>
					<td>{{$pro->sale_price}}</td>
					<td>{{$pro->category_id}}</td>
					<td>{{$pro->description}}</td>
					<td>{{$pro->created_at}}</td>
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