@extends('layouts.app')

@section('content')




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">
                    <div class="card-header">{{ __('Products') }}</div>
                    <div class="card-body">


                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-3 mb-3">
                                    <div class="card" style="width: 100%;">
                                        {{-- src="{{ url('storage/' . $product->image) }}" --}}
                                        <a href="{{ Auth::check() ? route('show_product', $product) : route('login') }}">
                                            <img class="card-img-top" src="{{$product->image }}" alt="Card image cap">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <h6><strong>  {{ number_format($product->price) }} MAD</strong></h6>
                                            <form action="{{ route('show_product', $product) }}" method="get">
                                                <button type="submit" class="btn  btn-outline-dark">{{ Auth::check() ? 'Show detail' : 'Login to view' }}</button>
                                            </form>
                                            @if (Auth::check() && Auth::user()->is_admin)
                                                <form action="{{ route('delete_product', $product) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn  btn-outline-dark mt-2">Delete product</button>
                                                </form>
                                            @endif
                                        </div>
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
