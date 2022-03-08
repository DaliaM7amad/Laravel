@extends('product.layout')

@section('content')
    <div class="jumbotron container">
        <p style="padding-bottom: 20px; font-size:30px; font-weight:500;">Trashed Products</p>
        <a class="btn btn-primary btn-lg" href="{{route('products.index')}}" role="button">Home</a>
    </div>

    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endif

    </div>

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col" style="width:400px">Actions</th>
                </tr>
            </thead>
            <tbody>

                @php
                    $i = 0;
                @endphp

                @foreach ($products as $item)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}} USD</td>
                        <td>
                            <div class="row">
                                <div class="col-sm">
                                    <a href="{{route('product.back.from.trash', $item->id)}}" class="btn btn-primary">Restore</a>
                                </div>
                                <div class="col-sm">
                                    <a href="{{route('product.delete.forever', $item->id)}}" class="btn btn-danger">Delete</a>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {!! $products->links() !!}

    </div>

@endsection
