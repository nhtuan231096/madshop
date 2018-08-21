@extends('layouts.master_layouts_product')
@section('main')

@section('cate_title','')

<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2 class="fa fa-check">order_success</h2>
                <a class="btn btn-lg btn-success" href="{{route('home')}}">Continue</a>
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