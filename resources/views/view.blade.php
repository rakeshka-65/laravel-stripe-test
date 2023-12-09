@extends('layouts.app')

@section('content')
	
	<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card" style="border-radius: 15px;">
          <!-- <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/12.webp"
              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
              alt="Laptop" />
            <a href="#!">
              <div class="mask"></div>
            </a>
          </div> -->
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <div>
                <p><h3 href="#!" class="text-dark">{{ $product->name }}</h3></p>
                
              </div>
              
          </div>
          <hr class="my-0" />
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <p><a class="text-dark">Rs. {{ $product->price }} </a></p>
              <p class="text-dark"></p>
            </div>
            <p class="small text-muted">{{ $product->description }} </p>
          </div>
          <hr class="my-0" />
         <!--  <div class="card-body">
            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
              <a href="#!" class="text-dark fw-bold">Cancel</a>
              <button type="button" class="btn btn-primary">Buy now</button>
            </div>
          </div> -->

          <div class="card-body">
		        <form action="{{ route('checkout.process', ['product'=>$product->id]) }}" method="post" id="payment-form">
		            @csrf
		            <div class="form-group">
		                <div class="card-header">
		                    <label for="card-element">
		                        Enter your credit card information
		                    </label>
		                </div>
		                <div class="card-body">
		                    <div id="card-element">
		                        <!-- A Stripe Element will be inserted here. -->
		                    </div>
		                    <!-- Used to display form errors. -->
		                    <div id="card-errors" role="alert"></div>
		                    <input type="hidden" name="product_id" value="{{ $product->id }}" />
		                </div>
		            </div>
		            <div class="card-footer">
		                <button class="btn btn-primary" type="submit">Buy Now</button>
		            </div>
		        </form>
		    </div>

        </div>
        
      </div>
    </div>
  </div>
</section>
@endsection