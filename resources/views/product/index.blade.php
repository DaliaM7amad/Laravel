@extends('product.layout')

@section('content')
    <div class="jumbotron container">
        <p style="padding-bottom: 20px; font-size:30px; font-weight:500;">Our Products</p>
        <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" role="button">Create</a>
        <span style="padding-left: 20px"></span>
        <a class="btn btn-primary btn-lg" href="{{route('product.trash')}}" role="button">Trash</a>
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
                                    <a href="{{route('products.edit', $item->id)}}" class="btn btn-success" >Edit</a>
                                </div>
                                <div class="col-sm">
                                    <a href="{{route('products.show', $item->id)}}" class="btn btn-primary">Show</a>
                                </div>
                                <div class="col-sm">
                                    <a href="{{route('soft.delete', $item->id)}}" class="btn btn-warning" >Soft Delete</a>
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
