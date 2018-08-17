@extends('layouts.admin')
@section('main')
<div class="row">
    <div class="col-md-6">
         <!--    Hover Rows  -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Banner</h2>
            </div>
            <div class="panel-body">
                <a href="{{route('add_Banner')}}" class="btn btn-info"><i class="fa fa-plus"></i> Add Banner</a>
                <input type="submit" class="btn btn-danger" value="Delete All">
                
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{Session::get('success')}}</strong>
                    </div>
                @endif


                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Created_at</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($banner as $ban)
                            <tr>
                                <td>{{$ban->name}}</td>
                                <td>
                                    <img src="{{url('uploads/banner')}}/{{$ban->image}}" width="50">
                                </td>
                                <td>
                                    @if($ban->status == 1)
                                        <span class="label label-primary">In Public</span>
                                    @else
                                        <span class="label label-danger">Pending</span>
                                    @endif
                                </td>
                                <td>{{$ban->created_at}}</td>
                                <td>
									<a class="btn btn-xs btn-info" href=""><i class="fa fa-edit"></i></a>
									<a class="btn btn-xs btn-danger" href="{{route('delete_banner',['id'=>$ban->id])}}" onclick="return confirm('Are You Sure')"><i class="fa fa-trash"></i></a>
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