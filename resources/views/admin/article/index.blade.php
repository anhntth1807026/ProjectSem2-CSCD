@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('article.index') }}">Article</a>
                </li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <div class="col-auto">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('article.create') }}">Create New Article</a>
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
                        <th scope="col">Id</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Miêu tả</th>
                        <th scope="col">Chi tiết</th>
                        <th width="240px">Thao tác</th>
                    </tr>
                    </thead>
                    @foreach ($article as $key => $articles)
                        <tbody id="myTable">
                        <tr id="tr_{{ $articles -> id }}">

                            <td scope="row"><input type="checkbox" class="checkbox" data-id="{{ $articles -> id }}">
                            </td>
                            <td scope="col">{{ $articles-> id }}</td>
                            <td scope="col">{{ $articles->title }}</td>
                            <td scope="col">
                                @foreach(explode("@",$articles->thumbnail) as $image)
                                    <img class="img-thumbnail rounded"
                                         style=""
{{--                                         src="https://res.cloudinary.com/dx8lbwzhw/image/upload/w_300,h_250/{{ $image }}"--}}
{{--                                         alt="{{ $articles->name }}">--}}
                                    src="{{ $image }}"
                                         alt="{{ $articles->name }}">
                                @endforeach
                            </td>

                            <td scope="col">{{ $articles->description }}</td>
                            <td scope="col">{{ $articles->detail }}</td>

                            <td scope="col">
                                <form action="{{ route('article.destroy', $articles->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('article.show', $articles->id) }}"
                                       title="View product detail">Detail</a>
                                    <a class="btn btn-primary " href="{{ route('article.edit',$articles->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <a href="javascript:void(0)" id="btn-delete-{{ $articles->id }}"
                                       class="btn btn-danger btn-delete"
                                       style=""
                                       title="Delete this product">Delete</a>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>

        </div>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <nav aria-label="Page navigation example">
                    {{$article->links()}}
                </nav>
            </div>
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
@endsection
