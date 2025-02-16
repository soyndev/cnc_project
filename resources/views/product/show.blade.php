@extends('layouts.app')
@section('title', 'Products')
@section('content')
    <div class="text-center pb-3">
        <h1 class="text-uppercase pb-2">{{$category->name}}</h1>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach($products as $product)
            <div class="col">
                @include('app.product')
            </div>
        @endforeach
    </div>
    {!! $products->links() !!}
@endsection