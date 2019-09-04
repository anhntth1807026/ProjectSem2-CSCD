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
                <form action="" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="" class="form-control"
                               placeholder="Name">
                    </div>
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" name="description"
                                  placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label >Thumbnail</label>
                        <input type="file" class="form-control" multiple="multiple" name="thumbnail[]"
                               placeholder="Thumbnail">
                    </div>
                    <div class="form-group">
                        <strong>Quantity:</strong>
                        <input type="number" name="quantity" value="" class="form-control"
                               placeholder="Quantity">
                    </div>
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input class="form-control" name="price"
                               placeholder="Price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Close</button>
                </form>
            </div>
        </div>
    </div>
@endsection
