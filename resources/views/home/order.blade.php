@extends('layouts.main')
@section('main')
<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Checkout</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<form method="post" class="colorlib-form">
							<h2>Billing Details</h2>
		              	<div class="row">

								<div class="col-md-12">
									<div class="form-group">
										<label for="fname">Full name</label>
										<input type="text" name="name" id="name" class="form-control" placeholder="Your full name">
									</div>
								</div>

			               <div class="col-md-12">
									<div class="form-group">
										<label for="fname">Address</label>
			                    	<input type="text" name="address" class="form-control"  placeholder="Enter Your Address">
			                  		</div>
			               </div>
			           
			        
							
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">E-mail Address</label>
										<input type="text" name="email" class="form-control" placeholder="State Province">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="Phone">Phone Number</label>
										<input type="text" name="phone" class="form-control" placeholder="Phone Number">
									</div>
								</div>
		               </div>
		               <div class="row">
							<div class="col-md-12 text-center">
								<input class="btn btn-primary" type="submit" value="Place an order">
							</div>
						</div>
						{{csrf_field()}}
		            </form>
					</div>

					<div class="col-lg-4">
						<div class="row">
							<div class="col-md-12">
								<div class="cart-detail">
									<h2>Cart Total</h2>
									<ul>
										<li>
											<ul>
												@foreach($cart->items as $it)
												<li><span>{{$it['qty']}} x {{$it['name']}}</span> <span>{{number_format($it['price'])}}đ</span></li>
												@endforeach
											</ul>
										</li>
										<li><span>Shipping</span> <span>0.00đ</span></li>
										<li><span>Total money</span> <span>{{number_format($cart->total_amount)}}đ</span></li>
									</ul>
								</div>
						   </div>

						   <div class="w-100"></div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
		
@stop()