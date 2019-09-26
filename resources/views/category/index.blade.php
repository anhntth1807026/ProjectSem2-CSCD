@extends('category.layout')

@section('content')
    <div>
        <br>
        <br>
    </div>
    <div class="row container-fluid">
        @if ($message = Session::get('success'))
            <div class="alert alert-success ">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><i class="fa fa-gamepad" aria-hidden="true"></i> Danh Sách Thể Loại</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('category.create') }}"> Tạo Thể Loại Mới</a>
            </div>

        </div>
        <div class="row mb-2 mt-2">
            <div class="col-6 col-md-6"></div>
            {{--            <div class="col-2 col-md-2">--}}
            {{--                <div class="form-group  mr-2">--}}
            {{--                    <select class="form-control ">--}}
            {{--                        <option>Category 01</option>--}}
            {{--                        <option>Category 01</option>--}}
            {{--                        <option>Category 01</option>--}}
            {{--                        <option>Category 01</option>--}}
            {{--                        <option>Category 01</option>--}}
            {{--                    </select>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="col-3 col-md-3">
                <div class="form-group float-left mr-2">
                    <input type="text" class="form-control mb-2 mr-sm-2" name="search" id="search"
                           placeholder="Enter keyword to search...">
                </div>

            </div>
            <div class="col-1 col-md-1">
                <div class="form-group float-left">
                    <button type="submit" class="btn btn-primary mb-2">Tìm Kiếm</button>
                </div>
            </div>
        </div>

        <table class="table table-bordered" id="search_table">
            <thead>
            <tr>
                <th scope="col"><input type="checkbox" id="checkAll"></th>
                <th scope="col">Số Thứ Tự</th>
                <th scope="col">Tên</th>
                <th width="280px">Thao Tác</th>
            </tr>
            </thead>

            {{--            @foreach ($category as $key => $categories)--}}
            {{--                <tbody id="myTable">--}}
            {{--                <tr id="tr_{{ $categories -> id }}">--}}
            {{--                    <td scope="row"><input type="checkbox" class="checkbox" data-id="{{ $categories -> id }}"></td>--}}
            {{--                    <td scope="col">{{ $categories-> id }}</td>--}}
            {{--                    <td scope="col">{{ $categories->name }}</td>--}}
            {{--                    --}}
            {{--                    <td>--}}
            {{--                        <form action="{{ route('category.destroy',$categories->id) }}" method="POST">--}}
            {{--                            <a class="btn btn-info" href="{{ route('category.show',$categories->id) }}">Show</a>--}}

            {{--                            <a class="btn btn-primary" href="{{ route('category.edit',$categories->id) }}">Edit</a>--}}

            {{--                            @csrf--}}
            {{--                            @method('DELETE')--}}
            {{--                            <a href="javascript:void(0)" id="btn-delete-{{ $categories-> id }}"--}}
            {{--                               class="btn btn-danger btn-delete">Delete--}}
            {{--                            </a>--}}
            {{--                        </form>--}}
            {{--                    </td>--}}
            {{--                </tr>--}}
            {{--                </tbody>--}}
            {{--            @endforeach--}}
            <tbody id="myTable">
            <tr id="tr_1">
                <td scope="row"><input type="checkbox" class="checkbox" data-id="1"></td>
                <td scope="col">1</td>
                <td scope="col">Chăm sóc nhà cửa</td>

                <td>
                    <form action="{{ route('category.destroy',1) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('category.show',1) }}">Hiển Thị</a>

                        <a class="btn btn-primary" href="{{ route('category.edit',1) }}">Sửa</a>

                        @csrf
                        @method('DELETE')
                        <a href="javascript:void(0)" id="btn-delete-1"
                           class="btn btn-danger btn-delete">Xóa
                        </a>
                    </form>
                </td>
            </tr>
            <tr id="tr_2">
                <td scope="row"><input type="checkbox" class="checkbox" data-id="2"></td>
                <td scope="col">2</td>
                <td scope="col">Sinh hoạt cá nhân</td>

                <td>
                    <form action="{{ route('category.destroy',2) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('category.show',2) }}">Hiển Thị</a>

                        <a class="btn btn-primary" href="{{ route('category.edit',2) }}">Sửa</a>

                        @csrf
                        @method('DELETE')
                        <a href="javascript:void(0)" id="btn-delete-2"
                           class="btn btn-danger btn-delete">Xóa
                        </a>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>

        {{--            <div class="row">--}}
        <div class="form-group mr-3">
            <select class=" mr-2 " id="select-action">
                <option>Xóa</option>
                <option>Xác Nhận</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger btn-xs mb-2">Xác Nhận</button>
            {{--                </div>--}}

        </div>


    </div>

    <div class="row">
        <div class="col-sm-6 col-md-5"></div>
        <div class="col-sm-6 col-md-4">
            <nav aria-label="Page navigation example">
                {{$category->links()}}
            </nav>
        </div>
    </div>


@endsection
