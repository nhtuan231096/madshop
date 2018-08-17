@extends('layouts.master_layouts_product')
@section('main')

@section('product')
@section('pages',$product->name)
<!-- <div class="row row-pb-md">
    <div class="col-lg-12 mb-4 text-center">
        <div class="product-entry border">
            <a href="{{route('view',['slug'=>$product->slug])}}" class="prod-img">
                <img src="{{asset('uploads')}}/{{$product->image}}" style="width:500px" class="img-fluid" alt="Free html5 bootstrap 4 template">
            </a>
            <div class="desc">
                <h2><a href="#">{{$product->name}}</a></h2>
                @if($product->sale_price>0)
                <s><span class="price">{{number_format($product->price)}}đ</span></s>
                <span class="price">{{number_format($product->sale_price)}}đ</span>
                @else
                <span class="price">{{number_format($product->price)}}đ</span>
                @endif
                <a class="btn btn-md btn-primary" href="">Add cart</a>
            </div>
        </div>
    </div>
</div> -->
<div class="row row-pb-md">
    <div class="col-md-6">
        <a href="{{route('view',['slug'=>$product->slug])}}" class="prod-img">
                <img src="{{asset('uploads')}}/{{$product->image}}" style="width:500px" class="img-fluid" alt="Free html5 bootstrap 4 template">
        </a>
    </div>
    <div class="col-md-6">
        <div class="desc">
                <h2><a href="#">{{$product->name}}</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni fugit possimus expedita? Fugit, natus necessitatibus labore perferendis. Labore aliquam expedita accusantium veniam debitis modi veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil pariatur, quidem laboriosam dolore magnam autem maxime velit iure omnis, temporibus ratione eos esse dicta veniam dolores officiis quae! Debitis, amet. Ipsa minus odio eaque.</p>
                @if($product->sale_price>0)
                <s><span class="price">{{number_format($product->price)}}đ</span></s>
                <p class="price">{{number_format($product->sale_price)}}đ</p>
                @else
                <p class="price">{{number_format($product->price)}}đ</p>
                @endif
                <a class="btn btn-md btn-primary" href="{{route('add_cart',['id'=>$product->id])}}">Add cart</a>
            </div>
    </div>
</div>>
 <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div>
@stop()
<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Trusted Partners</h2>
            </div>
        </div>
        <div class="row">
            <div class="col partner-col text-center">
                <img src="{{asset('/public')}}/images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="{{asset('/public')}}/images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="{{asset('/public')}}/images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="{{asset('/public')}}/images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="{{asset('/public')}}/images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
        </div>
    </div>
</div>
@stop()