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
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-9">
                <form action="{{ route('article.update', $article->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-4 form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $article->title }}" class="form-control"
                                   placeholder="Title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input style=" height: 100px" type="file" class="form-control" multiple="multiple"
                               name="thumbnail[]" value="{{ $article->thumbnail }}"
                               placeholder="Thumbnail">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"
                                  value="{{ $article->description }}"
                                  placeholder="Description">
                            {{ $article->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label>Detail</label>
                        <textarea class="form-control" name="detail"
                                  value="{{ $article->detail }}"
                                  placeholder="Detail">
                            {{ $article->detail }}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Close</button>
                </form>
            </div>
        </div>
    </div>
@endsection
