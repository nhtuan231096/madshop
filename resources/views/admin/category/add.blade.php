@extends('layouts.admin')
@section('main')
	<div class="col-md-12">
       <div class="panel panel-primary">
            <div class="panel-heading">
               Add Category
            </div>
            <div class="panel-body">
                <form role="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Enter Name</label>
                        <input class="form-control" type="text" name="name">
                        <p class="help-block">Help text here.</p>
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input class="form-control" name="slug">
                    </div>
                    <!-- div class="form-group">
                        <label>Select Parent</label>
                        {!! Form::text('search_text', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'search_text')) !!}
                    </div> -->
                    <!-- <div class="form-group">
                        <label>Parent</label>
                        <select name="parent" class="form-control">
                            @foreach($cat as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label>Status</label>
                        <input class="form-control" name="status">
                    </div>
                    <div class="form-group">
                        <label>Chose Image</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{asset('/public/admin')}}/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-info"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" class="center-block" value="Create">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
            </div>
        </div>
    </div>
<!--     <script>
   $(document).ready(function() {
    src = "{{ route('searchajax') }}";
     $("#search_text").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);
                   
                }
            });
        },
        minLength: 3,
    });
});
</script> -->
@stop()