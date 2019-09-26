@extends('admin.layout.master')
@section('content')
    <style>
        .rating .active {
            color: #ff9705 !important;
        }
    </style>
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
        <div class="row">
            <div class="form-group float-left mr-2">
                <select name="categoryId" class="form-control">
                    <option value="0" {{($currentCategoryId == 0) ? 'selected':''}}>Tất cả</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{($currentCategoryId == $category->id) ? 'selected':''}}>
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group float-left mr-2">
                <input type="text" class="form-control mb-2 mr-sm-2" name="keyword"
                       placeholder="Enter keyword to search" value="{{$currentKeyword}}">
                <input type="hidden" name="currentPage" value="{{$currentPage}}">
            </div>
            <div class="form-group float-left">
                <button type="submit" id="btn-search" class="btn btn-outline-primary mb-2">Search</button>
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
                        <th scope="col">Id</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Loại sản phẩm</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Nổi bật</th>
                        <th width="240px">Thao tác</th>
                    </tr>
                    </thead>
                    @foreach ($list as $key => $products)

                        <tbody id="myTable">
                        <?php
                        $avg = 0;
                        if ($products->pro_total_rating) {
                            $avg = round($products->pro_total_number / $products->pro_total_rating, 2);
                        }
                        ?>
                        <tr id="tr_{{ $products -> id }}">

                            <td scope="row"><input type="checkbox" class="checkbox" data-id="{{ $products -> id }}">
                            </td>
                            <td scope="col">{{ $products-> id }}</td>
                            <td scope="col">
                                {{ $products->name }}
                                <ul>
                                    <li style="list-style: none">
                                        <span>Đánh giá : </span>
                                        <span class="rating">
                                    @for($i =1; $i <= 5; $i ++)
                                                <i class="fas fa-star {{ $i <= $avg ? 'active' : '' }}"
                                                   style="color: #999"></i>
                                            @endfor
                                </span>
                                        <span>{{ $avg }}</span>
                                    </li>
                                </ul>

                            </td>
                            <td scope="col">{{ isset($products->category->name) ? $products->category->name : '[N/A]' }}</td>
                            <td scope="col">
                                @foreach(explode("@",$products->thumbnail) as $image)
                                    <img class="img-thumbnail rounded"
                                         style="width: 150px;margin: 0 10px"
                                         src="https://res.cloudinary.com/dx8lbwzhw/image/upload/w_300,h_250/{{ $image }}"
                                         alt="{{ $products->name }}">
                                @endforeach
                            </td>

                            <td scope="col">{{ $products->quantity }}</td>
                            <td scope="col">{{ $products->price }}</td>
                            <td scope="col">{{ $products->pro_hot }}</td>

                            <td scope="col">
                                <form action="{{ route('product.destroy', $products->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('product.show', $products->id) }}"
                                       title="View product detail">Detail</a>
                                    <a class="btn btn-primary mr-2" href="{{ route('product.edit',$products->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <a href="javascript:void(0)" id="btn-delete-{{ $products->id }}"
                                       class="btn btn-danger btn-delete"
                                       style="margin-top: 5px"
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
                    <button type="button" class="btn btn-outline-primary mb-2 delete-all" id="btn-apply-all">Apply to all</button>
                </div>
            </div>
            <div class="row">
                <div class="col-9"></div>
                <div class="col-3 pull-right" style="float: right">
                    <nav aria-label="Page navigation example">
                        {{$product->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
