@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('category.index') }}">Category</a>
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
            <div class="row col-9 mb-2 mt-2">
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                               placeholder="Name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </form>
        </div>
    </div>
    </div>

@endsection
