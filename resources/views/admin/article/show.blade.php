@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('article.index')}}">Article</a>
                </li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
        </div>
        <div class="row">
            <table class="table">
                <tbody>
                <tr>
                    <th>Title</th>
                    <td>{{ $article->title }}</td>
                </tr>
                <tr>
                    <th>Thumbnail</th>
                    <td>
                        @foreach(explode("@",$article->thumbnail) as $image)
                            <img class="img-thumbnail rounded"
                                 style="width: 150px;margin: 0 10px"
                                 src="{{ $image }}"
                                 alt="{{ $article->name }}">
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $article-> description }}</td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td>{{ $article-> detail }}</td>
                </tr>

                <tr>
                    <th>Created At</th>
                    <td>{{ $article-> created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $article-> updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
