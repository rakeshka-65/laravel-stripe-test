@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @foreach($products as $product)
                            <div class="column">
                                <div class="card">
                                    <h3>{{ $product->name }}</h3>
                                    <p>Rs. {{ $product->price }}</p>
                                    <p><a href="{{ route('view', ['product' => $product->id]) }}" class="buy-btn" >Buy</a></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
