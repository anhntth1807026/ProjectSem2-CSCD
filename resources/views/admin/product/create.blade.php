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
                <li class="breadcrumb-item active">Add</li>
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
                <form action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-4 form-group">
                            <label>Name</label>
                            <input style="" type="text" name="name" class="form-control"
                                   placeholder="Please enter name">
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
                        <label for="exampleInputPassword1">Description</label>
                        <textarea class="form-control" style="height:150px" name="description"
                                  placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Thumbnail</label>
                        <input style=" height: 100px" type="file" class="form-control"
                               multiple="multiple" name="thumbnail[]"
                               placeholder="Thumbnail">
                    </div>
                    <div class="row">
                        <div class="col-5 form-group">
                            <label for="exampleInputPassword1">Quantity</label>
                            <input style="width: 70%" type="number" name="quantity" class="form-control"
                                   placeholder="Please enter quantity">
                        </div>
                        <div class="col-5 form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input style="width: 70%" type="number" name="price" class="form-control"
                                   placeholder="Please enter price">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
