@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.get.user') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Edit Product</li>
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
                <form action="" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="" class="form-control"
                               placeholder="Name">
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input class="form-control" name="email"
                                  placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control"
                               placeholder="password">
                    </div>
                    <div class="form-group">
                        <label >Age</label>
                        <input type="number" name="age" class="form-control"
                               placeholder="Age">
                    </div>
                    <div class="form-group">
                        <label >Address</label>
                        <input type="text" class="form-control" name="address"
                               placeholder="Address">
                    </div>

                    <div class="form-group">
                        <label >Phone</label>
                        <input type="number" name="phone" class="form-control"
                               placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="form-control">
                            <option selected value="male">Nam</option>
                            <option value="female">Nữ</option>
                            <option value="other">Khác</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Close</button>
                </form>
            </div>
        </div>
    </div>
@endsection
