@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 c col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{ $product['qty'] }}</span>
                            <strong>{{$product['item']['title']}}</strong>
                            <spn class="label label-success">{{ $product['price'] }}</spn>
                            <btn-group>
                                <button type="button" class="btn btn-primary btn-xs dropdowon-toogle" data-toggle="dropdonw">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Reudce by 1</a></li>
                                    <li><a href="#">Reudce All</a></li>
                                </ul>
                            </btn-group>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 c col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 c col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 c col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart! </h2>
            </div>
        </div>
    @endif
@endsection