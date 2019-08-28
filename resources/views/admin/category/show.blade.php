@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="{{ route('category.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Category Detail</li>
            </ol>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                </div>
            </div>
        </div>
    </div>
@endsection
