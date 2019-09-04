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
                <li class="breadcrumb-item active">Detail</li>
            </ol>
        </div>
        <div class="row">
            <table class="table">
                <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Thumbnail</th>
                    <td>
                        @foreach(explode("@",$product->thumbnail) as $image)
                            <img class="img-thumbnail rounded"
                                 style="width: 150px;margin: 0 10px"
                                 src="{{ $image }}"
                                 alt="{{ $product->name }}">
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $product-> description }}</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>{{ $product-> quantity }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $product-> price }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $product-> created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $product-> updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
