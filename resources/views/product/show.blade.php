@extends('product.layout')

@section('content')
    <div class="container" style="padding-top: 1%">
        <div class="card">
            <div class="card-body">
                <p class="card-text" style="color: rgb(0, 151, 221); font-weight:bold;">Product Name : {{$product->name}}</p>
                <a href="{{route('products.index')}}" style="color: rgb(233, 93, 93); text-decoration:underline;">Back</a>
            </div>
        </div>
    </div>


    <div class="container" style="padding-top: 2%">
            <div class="form-group">
                <label for="exampleFormControlInput1">{{$product->name}}</label>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">{{$product->price}}</label>
            </div>
            <div class="form-group">
                {!! $product->detail !!}
            </div>

    </div>
@endsection
