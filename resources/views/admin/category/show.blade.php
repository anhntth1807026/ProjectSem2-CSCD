@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('category.index')}}">Category</a>
                </li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
        </div>

        <div class="row">
            <table class="table">
                <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $category->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $category->updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
