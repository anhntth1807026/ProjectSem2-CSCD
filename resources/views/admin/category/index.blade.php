@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('category.index') }}">Category</a>
                </li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <div class="col-auto">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('category.create') }}">Create New Category</a>
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
                        <th scope="col">Name</th>
                        <th width="280px">Action</th>
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
                                <a href="{{ route('category.show', $categories->id ) }}" class="mr-2" title="View category detail">Detail</a>
                                <a href="{{ route('category.edit', $categories->id ) }}" id="btn-edit-1" class="mr-2 btn-edit"
                                   title="Edit this category">Edit</a>
                                @csrf
                                @method('DELETE')
                                <a href="javascript:void(0)" id="btn-delete-{{ $categories->id }}" class="mr-2 btn-delete"
                                   title="Delete this category">Delete</a>
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
                        <button type="button" class="btn btn-outline-primary mb-2" id="btn-apply-all">Apply to all</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
