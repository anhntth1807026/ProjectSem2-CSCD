@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Thống Kê</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('product.index') }}">Sản Phẩm</a>
                </li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <div class="col-auto">
                <div class="pull-left">

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
                        <th scope="col">STT</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nội dung</th>
                        <th width="240px">Thao Tác</th>
                    </tr>
                    </thead>
                    @foreach ($contact as $key => $contacts)
                        <tbody id="myTable">
                        <tr id="tr_{{ $contacts -> id }}">

                            <td scope="row"><input type="checkbox" class="checkbox" data-id="{{ $contacts -> id }}">
                            </td>
                            <td scope="col">{{ $contacts-> id }}</td>
                            <td scope="col">{{ $contacts->c_name }}</td>
                            <td scope="col">{{ $contacts->c_email }}</td>
                            <td scope="col">{{ $contacts->c_content }}</td>
                            <td scope="col">
{{--                                <form action="{{ route('product.destroy', $products->id) }}" method="POST">--}}
{{--                                    <a class="btn btn-info" href="{{ route('product.show', $products->id) }}"--}}
{{--                                       title="View product detail">Detail</a>--}}
{{--                                    <a class="btn btn-primary mr-2" href="{{ route('product.edit',$products->id) }}">Edit</a>--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <a href="javascript:void(0)" id="btn-delete-{{ $products->id }}"--}}
{{--                                       class="btn btn-danger btn-delete"--}}
{{--                                       style="margin-top: 5px"--}}
{{--                                       title="Delete this product">Delete</a>--}}
{{--                                </form>--}}
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col-7" style="">
                        <nav aria-label="Page navigation example">
                            {{$contact->links()}}
                        </nav>
                    </div>
                </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="form-group mr-3">--}}
{{--                <select class="form-control mr-2" id="select-action">--}}
{{--                    <option value="0">--Chọn thao tác--</option>--}}
{{--                    <option value="-1">Xoá</option>--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <button type="button" class="btn btn-outline-primary mb-2 delete-all" id="btn-apply-all">Xác Nhận</button>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
