@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('product.index')}}">Product</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-9">
                <form action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input style="width: 50%" type="text" name="name" value="{{ $product->name }}" class="form-control"
                               placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input class="form-control" name="description"
                                  value="{{ $product->description }}"
                                  placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input style="width: 40%; height: 250px" type="file" class="form-control" multiple="multiple"
                               name="thumbnail" value="{{ $product->thumbnail }}"
                               placeholder="Thumbnail">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input style="width: 35%" type="number" name="quantity" value="{{ $product->quantity }}" class="form-control"
                               placeholder="Quantity">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input style="width: 35%" class="form-control" name="price" value="{{ $product->price }}"
                               placeholder="Price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Close</button>
                </form>
            </div>
        </div>
    </div>
@endsection
