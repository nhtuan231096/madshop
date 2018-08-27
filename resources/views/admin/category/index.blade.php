@extends('layouts.admin')
@section('main')
<div class="row">
    <div class="col-md-6">
         <!--    Hover Rows  -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Category</h2>
            </div>
            <div class="panel-body">
                <a href="{{route('addCat')}}" class="btn btn-info"><i class="fa fa-plus"></i> Add Category</a>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{Session::get('success')}}</strong>
                </div>
                @endif
                <input type="submit" class="btn btn-danger" value="Delete All">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Parent</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($datas as $k => $cat)
                            <tr>
                                <td>{{$k+1}}</td>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->parent}}</td>
                                <!-- <td>{{$cat->ordering}}</td> -->
                                <td>
                                    <img src="{{url('uploads/brand')}}/{{$cat->image}}" width="50">
                                </td>   
                                <td>
                                    @if($cat->status == 1)
                                        <span class="label label-primary">In Public</span>
                                    @else
                                        <span class="label label-danger">Pending</span>
                                    @endif
                                </td>
                                <td>
									<a class="btn btn-xs btn-info" href="{{route('editCate',['id'=>$cat->id])}}"><i class="fa fa-edit"></i></a>
									<a class="btn btn-xs btn-danger" href="{{route('deleteCat',['id'=>$cat->id])}}" onclick="return confirm('Are You Sure')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Hover Rows  -->
    </div>
</div>
                <!-- /. ROW  -->
@stop()