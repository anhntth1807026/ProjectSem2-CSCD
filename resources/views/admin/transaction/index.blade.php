@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('admin.list.transaction')}}">Transaction</a>
                </li>
                <li class="breadcrumb-item active">List</li>
            </ol>
        </div>
        <div class="table-responsive">
            <h2>Quản lí đơn hàng</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User_Id</th>
                    <th>Total</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Status</th>

                </tr>
                </thead>
                <tbody>
{{--                @if(isset($users))--}}
{{--                    @foreach($users as $user)--}}
{{--                        <tr>--}}
{{--                            <td> {{ $user->id }}</td>--}}
{{--                            <td>--}}
{{--                                {{ $user -> name }}--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                {{ $user->email }}--}}
{{--                            </td>--}}
{{--                            <td> {{ $user->password }}</td>--}}
{{--                            <td> {{ $user->age }}</td>--}}
{{--                            <td> {{ $user->address }}</td>--}}
{{--                            <td> {{ $user->phone }}</td>--}}
{{--                            <td> {{ $user->gender }}</td>--}}
{{--                            <td>--}}
{{--                                <form action="{{ route('admin.delete.user',$user->id) }}" method="POST">--}}

{{--                                    <a class="btn btn-primary" href="{{ route('admin.edit.user',$user->id) }}">Edit</a>--}}

{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <a href="javascript:void(0)" id="btn-delete-{{ $user-> id }}"--}}
{{--                                       class="btn btn-danger btn-delete">Delete--}}
{{--                                    </a>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
                </tbody>
            </table>
        </div>
    </div>

@endsection
