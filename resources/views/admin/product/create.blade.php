@extends('admin.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb col-auto mr-auto">
                <li class="breadcrumb-item">
                    <a href="/admin/chart">Thống Kê</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('product.index')}}">Sản Phẩm</a>
                </li>
                <li class="breadcrumb-item active">Thêm Sản Phẩm</li>
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
                <form action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6 form-group">
                            <label>Tên</label>
                            <input style="width: 70%" type="text" name="name" class="form-control"
                                   placeholder="Nhập tên sản phẩm">
                        </div>

                        <div class="col-6 form-group">
                            <label for="">Thể Loại: </label>
                            <select style="width: 71%" name="pro_category_id" id="" class="form-control">
                                <option value="">--Chọn loại sản phẩm--</option>
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                        <textarea class="form-control" style="height:150px" name="pro_description"
                                  placeholder="Nhập miêu tả cho sản phẩm"></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('pro_description');
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Hình Ảnh</label>
                        <input style=" height: 100px" type="file" class="form-control"
                               multiple="multiple" name="thumbnail[]"
                               placeholder="Chọn hình ảnh sản phẩm">
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label for="exampleInputPassword1">Số Lượng</label>
                            <input style="width: 75%" type="number" name="quantity" class="form-control"
                                   placeholder="Nhập số lượng sản phẩm">
                        </div>
                        <div class="col form-group">
                            <label for="exampleInputPassword1">Giá</label>
                            <input style="width: 70%" type="number" name="price" class="form-control"
                                   placeholder="Nhập giá cho sản phẩm">
                        </div>
                        <div class="col form-group">
                            <label for="">Sản phẩm nổi bật</label>
                            <div class="radio">
                                <label for="">
                                    <input type="radio" name="pro_hot"
                                           <?php if (['pro_hot'] == 1){
                                               echo 'checked';
                                           }
                                           ?>
                                           value=" 1">Nổi bật
                                </label>
                            </div>

                            <div class="radio" style="">
                                <label for="">
                                    <input type="radio" name="pro_hot"
                                           <?php if (['pro_hot'] == 0){
                                               echo 'checked';
                                           }
                                           ?>
                                           value="0" checked>không
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Xác Nhận</button>
                </form>
            </div>
        </div>
    </div>
@endsection
