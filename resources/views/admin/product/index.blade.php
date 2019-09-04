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
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th width="240px">Action</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    <tr id="tr_1">
                        <td scope="row"><input type="checkbox" class="checkbox" data-id="1"></td>
                        <td>1</td>
                        <td>
                            <img class="img-thumbnail rounded"
                                 style="width: 50px;margin: 0 10px;border: 1px solid black"
                                 src="https://instagram.fhan2-3.fna.fbcdn.net/vp/55b3757cbc713d8151548d36d836c17d/5DF7BBFA/t51.2885-15/sh0.08/e35/s640x640/61326708_149466602858719_4296186357804016051_n.jpg?_nc_ht=instagram.fhan2-3.fna.fbcdn.net"
                                 alt="Xà bông cục">
                        </td>
                        <td>Xà Bông Cục</td>
                        <td>Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi bánh xà phòng.
                        </td>
                        <td>10</td>
                        <td>100000</td>
                        <td>
                            <form action="{{ route('product.destroy',1) }}" method="POST">
                                <a href="{{route('product.show', 1)}}" class="mr-2" title="View game detail">Detail</a>
                                <a href="{{route('product.edit', 1)}}" id="btn-edit-1" class="mr-2 btn-edit"
                                   title="Edit this product">Edit</a>
                                @csrf
                                @method('DELETE')
                                <a href="javascript:void(0)" id="btn-delete-1" class="mr-2 btn-delete"
                                   title="Delete this product">Delete</a>
                            </form>
                        </td>
                    </tr>
                    <tr id="tr_2">
                        <td scope="row"><input type="checkbox" class="checkbox" data-id="1"></td>
                        <td>2</td>
                        <td>
                            <img class="img-thumbnail rounded"
                                 style="width: 50px;margin: 0 10px;border: 1px solid black"
                                 src="https://instagram.fhan2-3.fna.fbcdn.net/vp/245c4ee47612cb05e49022a123ee3808/5DFC4565/t51.2885-15/sh0.08/e35/p750x750/59551474_446829726067521_5913092042567309768_n.jpg?_nc_ht=instagram.fhan2-3.fna.fbcdn.net"
                                 alt="Bông tắm xơ mướp">
                        </td>
                        <td>Bông Tắm Xơ Mướp</td>
                        <td>Xơ mướp là 1 loại quả tự nhiên không qua xử lý hóa chất, nên vô cùng an toàn cho làn da. Đặc
                            biệt, tắm bằng xơ mướp đều đặn mỗi ngày giúp máu lưu thông tốt hơn, tẩy da chết và làm làn
                            da hồng hào hơn.
                        </td>
                        <td>10</td>
                        <td>30000</td>
                        <td>
                            <form action="{{ route('product.destroy',2) }}" method="POST">
                                <a href="{{route('product.show', 2)}}" class="mr-2" title="View game detail">Detail</a>
                                <a href="{{route('product.edit', 2)}}" id="btn-edit-1" class="mr-2 btn-edit"
                                   title="Edit this product">Edit</a>
                                @csrf
                                @method('DELETE')
                                <a href="javascript:void(0)" id="btn-delete-1" class="mr-2 btn-delete"
                                   title="Delete this product">Delete</a>
                            </form>
                        </td>
                    </tr>
                    </tbody>
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
