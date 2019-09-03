@extends('admin.layout.master')

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ/</a></li>
            <li><a href="#">Thành Viên/</a></li>
            <li><a class="active">Danh sách</a></li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Quản lí thành viên</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Mật khẩu</th>
                <th>Tuổi</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Giới tính</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @if(isset($users))
                    @foreach($users as $user)
                    <tr>
                        <td> {{ $user->id }}</td>
                        <td>
                            {{ $user -> name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td> {{ $user->password }}</td>
                        <td> {{ $user->age }}</td>
                        <td> {{ $user->address }}</td>
                        <td> {{ $user->phone }}</td>
                        <td> {{ $user->gender }}</td>
                        <td>
                            <form action="{{ route('admin.delete.user',$user->id) }}" method="POST">

                                <a class="btn btn-primary" href="{{ route('admin.edit.user',$user->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <a href="javascript:void(0)" id="btn-delete-{{ $user-> id }}"
                                   class="btn btn-danger btn-delete">Delete
                                </a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
            </tbody>
        </table>
    </div>

@endsection
