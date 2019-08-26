@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $product->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Thumbnail:</strong>
                @foreach(explode("@",$product->thumbnail) as $image)
                    <img style="width: 50px;margin: 0 10px;border: 1px solid black" src="{{ $image }}" alt="">
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                {{ $product->quantity }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $product->price }}
            </div>
        </div>
    </div>

@endsection
