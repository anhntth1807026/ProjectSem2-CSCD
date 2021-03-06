@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Thống Kê</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('category.index') }}">Thể Loại</a>
                </li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <div class="col-auto">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('category.create') }}">Tạo thể loại mới</a>
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
                        <th scope="col">Số Thứ Tự</th>
                        <th scope="col">Tên</th>
                        <th width="280px">Thao Tác</th>
                    </tr>
                    </thead>
                    @foreach ($category as $key => $categories)
                    <tbody id="myTable">
                    <tr id="tr_{{ $categories->id }}">
                        <td scope="row"><input type="checkbox" class="checkbox" data-id="{{ $categories->id }}"></td>
                        <td scope="col">{{ $categories->id }}</td>
                        <td scope="col">{{ $categories->name }}</td>
                        <td>
                            <form action="{{ route('category.destroy', $categories->id ) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('category.edit', $categories->id ) }}">Sửa</a>
                                @csrf
                                @method('DELETE')
                                <a href="javascript:void(0)" id="btn-delete-{{ $categories->id }}" class="mr-2 btn btn-danger btn-delete"
                                   title="Delete this category">Xóa</a>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="form-group mr-3">
                        <select class="form-control mr-2" id="select-action">
                            <option value="0">--Chọn thao tác--</option>
                            <option value="-1">Xoá</option>
                            <option value="1">Phát hành</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-primary mb-2 delete-all" id="btn-apply-all">Xác Nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
