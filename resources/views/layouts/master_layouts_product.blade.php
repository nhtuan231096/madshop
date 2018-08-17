@extends('layouts.main')
@section('category')
<div class="colorlib-product">
    <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="bread"><span><a href="{{route('home')}}">Home</a></span> / <span>@yield('pages')</span></p>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>@yield('cate_title')</h2>
            </div>
        </div>
        @yield('product')
    </div>
</div>
@stop()