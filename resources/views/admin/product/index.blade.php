@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('product.index') }}">Product</a>
                </li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <div class="col-auto">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('product.create') }}">Create New Product</a>
                </div>
            </div>
        </div>
        <div class="row container-fluid">
            @if ($message = Session::get('success'))
                <div class="alert alert-success ">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="row mb-2 mt-2">
                <table class="table table-bordered" id="search_table">
                    <thead>
                    <tr>
                        <th scope="col"><input type="checkbox" id="checkAll"></th>
                        <th scope="col">No</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th width="240px">Action</th>
                    </tr>
                    </thead>
                    @foreach ($product as $key => $products)
                    <tbody id="myTable">
                    <tr id="tr_{{ $products -> id }}">
                        <td scope="row"><input type="checkbox" class="checkbox" data-id="{{ $products -> id }}"></td>
                        <td scope="col">{{ $products-> id }}</td>
                        <td scope="col">
                            @foreach(explode("@",$products->thumbnail) as $image)
                            <img class="img-thumbnail rounded"
                                 style="width: 150px;margin: 0 10px"
                                 src="{{ $image }}"
                                 alt="{{ $products->name }}">
                            @endforeach
                        </td>
                        <td scope="col">{{ $products->name }}</td>
                        <td scope="col">{{ $products->quantity }}</td>
                        <td scope="col">{{ $products->price }}</td>
                        <td scope="col">
                            <form action="{{ route('product.destroy', $products->id) }}" method="POST">
                                <a href="{{ route('product.show', $products->id) }}" class="mr-2" title="View product detail">Detail</a>
                                <a href="{{ route('product.edit', $products->id) }}" id="btn-edit-1" class="mr-2 btn-edit"
                                   title="Edit this product">Edit</a>
                                @csrf
                                @method('DELETE')
                                <a href="javascript:void(0)" id="btn-delete-{{ $products->id }}" class="mr-2 btn-delete"
                                   title="Delete this product">Delete</a>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="row">
                <div class="form-group mr-3">
                    <select class="form-control mr-2" id="select-action">
                        <option value="0">--Chọn thao tác--</option>
                        <option value="-1">Xoá</option>
                        <option value="1">Phát hành</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-outline-primary mb-2" id="btn-apply-all">Apply to all</button>
                </div>
            </div>
        </div>
    </div>
@endsection
