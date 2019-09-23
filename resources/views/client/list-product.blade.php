@extends('client.layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3" style="position: sticky; top: 0;">
                <!-- Search form -->
                <div class="md-form mt-0">
                    <div style="display: flex">
                        <input  class="form-control" type="text"
                               placeholder="Enter keyword to search" name="keyword" value="{{$currentKeyword}}">
                        <i id="btn-search" class="fas fa-search" style="padding-top: 16px;opacity: 1;position: absolute;right: 23px;"></i></div>
                    <input type="hidden" name="currentPage" value="{{$currentPage}}">
{{--                    <button type="submit" class="btn btn-outline-primary mb-2">Search</button>--}}
                </div>
                <!--Category-->
                <div class="filter-category">
                    <h5 style="text-align: center; ">Thể Loại</h5>
                    <select id="select-category" name="categoryId" class="form-control">

                        <option value="0" {{($currentCategoryId == 0) ? 'selected':''}}>Tất cả</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{($currentCategoryId == $category->id) ? 'selected':''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!--Ranger Slider-->

            </div>
            <div class="col-sm-9">
                <h2 style="text-align:center; font-family: auto ">Tất cả các sản phẩm</h2>
                @foreach($list as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid6">
                            <div class="product-image6">
                                <a href="#">
                                    <img class="pic-1" src="https://res.cloudinary.com/dx8lbwzhw/image/upload/{{$item->thumbnail}}"
                                         title="Bấm để xem hình ảnh chi tiết">
                                </a>
                            </div>
                            <div class="product-content">
                                <h5 class="title"><a href="#">{{$item->name}}</a></h5>
                                <div class="price">{{number_format($item->price, 0, ',', '.')}} VNĐ</div>
                            </div>
                            <ul class="social">
                                <li><a href="/Product-Details" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="/add/{id}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
                <div class="w3-center w3-padding-32">
                    <div class="w3-bar">
                        {{$list->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
            <div class="col-sm-9">
                <h2 style="text-align:center; font-family: auto ">Tất cả các sản phẩm</h2>
                @foreach($list as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="product-grid6">
                            <div class="product-image6">
                                <a href="#">
                                    <img class="pic-1" src="https://res.cloudinary.com/dx8lbwzhw/image/upload/{{$item->thumbnail}}"
                                         title="Bấm để xem hình ảnh chi tiết">
                                </a>
                            </div>
                            <div class="product-content">
                                <h5 class="title"><a href="#">{{$item->name}}</a></h5>
                                <div class="price">{{number_format($item->price, 0, ',', '.')}} VNĐ</div>
                            </div>
                            <ul class="social">
                                <li><a href="/Product-Details" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="/add/{id}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
                <div class="w3-center w3-padding-32">
                    <div class="w3-bar">
                        {{$list->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()