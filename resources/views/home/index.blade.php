@extends('layouts.main')
@section('main')
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            @foreach($banner as $ban)
            <li style="background-image: url('{{url('uploads/banner')}}/{{$ban->image}}');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1 class="head-1">Men's</h1>
                                    <h2 class="head-2">Shoes</h2>
                                    <h2 class="head-3">Collection</h2>
                                    <p class="category"><span>New trending shoes</span></p>
                                    <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

</aside>
<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
            </div>
        </div>
    </div>
</div>
<div class="colorlib-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img" style="background-image: url({{asset('/public')}}//images/men.jpg);"></a>
                    <div class="desc">
                        <h2><a href="#">Shop Men's Collection</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img" style="background-image: url({{asset('/public')}}//images/women.jpg);"></a>
                    <div class="desc">
                        <h2><a href="#">Shop Women's Collection</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>New product</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            @foreach($pro as $pr)
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="{{asset('uploads')}}/{{$pr->image}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">{{$pr->name}}</a></h2>
                        @if($pr->sale_price>0)
                        <s><span class="price">{{number_format($pr->price)}}đ</span></s>
                        <span class="price">{{number_format($pr->sale_price)}}đ</span>
                        @else
                         <span class="price">{{number_format($pr->price)}}đ</span>
                        @endif
                        <a class="btn btn-md btn-primary" href="{{route('add-cart',['id'=>$pr->id])}}">Add Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div>
    </div>
</div>

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