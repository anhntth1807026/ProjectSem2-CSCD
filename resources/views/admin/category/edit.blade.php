@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="{{ route('category.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Edit Category</li>
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
            <div class="row">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="col-9">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="" class="form-control"
                                   placeholder="Name">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

@endsection
