@extends('layouts.master_layouts_product')
@section('main')

@section('cate_title',$category->name)
@section('product')
@section('pages',$category->name)
<div class="row row-pb-md">
    @foreach($category->products as $pro)
    <div class="col-lg-3 mb-4 text-center">
        <div class="product-entry border">
            <a href="{{route('view',['slug'=>$pro->slug])}}" class="prod-img">
                <img src="{{asset('uploads')}}/{{$pro->image}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
            </a>
            <div class="desc">
                <h2><a href="#">{{$pro->name}}</a></h2>
                @if($pro->sale_price>0)
                <s><span class="price">{{number_format($pro->price)}}đ</span></s>
                <span class="price">{{number_format($pro->sale_price)}}đ</span>
                @else
                <span class="price">{{number_format($pro->price)}}đ</span>
                @endif
                <!-- <a class="btn btn-md btn-primary" href="">Add cart</a> -->
            </div>
        </div>
    </div>
    <!-- <div class="w-100"></div> -->
    @endforeach()
</div>
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