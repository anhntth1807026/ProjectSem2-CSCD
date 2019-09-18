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
                <li class="breadcrumb-item active">Add</li>
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
                <form action="{{route('article.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6 form-group">
                            <label>Title</label>
                            <input style="width: 70%" type="text" name="title" class="form-control"
                                   placeholder="Please enter the title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Thumbnail</label>
                        <input style=" height: 100px" type="file" class="form-control"
                               multiple="multiple" name="thumbnail[]"
                               placeholder="Thumbnail">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea class="form-control" style="height:150px" name="description"
                                  placeholder="Description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Detail</label>
                        <textarea class="form-control" style="height:150px" name="detail"
                                  placeholder="Detail"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
