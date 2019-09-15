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
                    <div class="row">
                        <div class="col-4 form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                   placeholder="Name">
                        </div>

                        <div class="col-4 form-group">
                            <label for="">Category: </label>
                            <select name="pro_category_id" id="" class="form-control">
                                <option value="">--Chọn loại sản phẩm--</option>
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"
                                  value="{{ $product->description }}"
                                  placeholder="Description">
                            {{ $product->description }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input style=" height: 100px" type="file" class="form-control" multiple="multiple"
                               name="thumbnail[]" value="{{ $product->thumbnail }}"
                               placeholder="Thumbnail">
                    </div>
                    <div class="row">
                        <div class=" col-5 form-group">
                            <label>Quantity</label>
                            <input style="width: 70%" type="number" name="quantity" value="{{ $product->quantity }}"
                                   class="form-control"
                                   placeholder="Quantity">
                        </div>
                        <div class="col-5 form-group">
                            <label>Price</label>
                            <input style=" width: 70%" class="form-control" name="price" value="{{ $product->price }}"
                                   placeholder="Price">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Close</button>
                </form>
            </div>
        </div>
    </div>
@endsection
