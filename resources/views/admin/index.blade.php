@extends('admin.layout')

@section('content')
    <div>
        <br>
        <br>
    </div>
    <div class="row container-fluid">
        @if ($message = Session::get('success'))
            <div class="alert alert-success ">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> LIST PRODUCT</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
            </div>

        </div>
        <div class="row mb-2 mt-2">
            <div class="col-6 col-md-6"></div>
            <div class="col-2 col-md-2">
                <div class="form-group  mr-2">
                    <select class="form-control ">
                        <option>Category 01</option>
                        <option>Category 02</option>
                    </select>
                </div>
            </div>
            <div class="col-3 col-md-3">
                <div class="form-group float-left mr-2">
                    <input type="text" class="form-control mb-2 mr-sm-2" name="search" id="search"
                           placeholder="Enter keyword to search...">
                </div>

            </div>
            <div class="col-1 col-md-1">
                <div class="form-group float-left">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                </div>
            </div>
        </div>

        <table class="table table-bordered" id="search_table">
            <thead>
            <tr>
                <th scope="col"><input type="checkbox" id="checkAll"></th>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th width="280px">Action</th>
            </tr>
            </thead>

            @foreach ($product as $key => $products)
                <tbody id="myTable">
                <tr id="tr_{{ $products -> id }}">
                    <td scope="row"><input type="checkbox" class="checkbox" data-id="{{ $products -> id }}"></td>
                    <td scope="col">{{ $products-> id }}</td>
                    <td scope="col">{{ $products->name }}</td>
                    <td scope="col">{{ $products->description }}</td>

                    <td scope="col">
                        @foreach(explode("@",$products->thumbnail) as $image)
                            <img style="width: 50px;margin: 0 10px;border: 1px solid black" src="{{ $image }}" alt="">
                        @endforeach
                    </td>
                    <td scope="col"> {{ $products->quantity }}</td>
                    <td scope="col">{{ $products->price }}</td>
                    <td>
                        <form action="{{ route('product.destroy',$products->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('product.show',$products->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('product.edit',$products->id) }}">Edit</a>

                            <!-- Button trigger modal -->

{{--                            <a href="javascript:void(0)" id="btn-edit-{{$products->id}}"--}}
{{--                               class="btn btn-primary mr-2 btn-edit" title="Edit this game">Edit</a>--}}


                            @csrf
                            @method('DELETE')
                            <a href="javascript:void(0)" id="btn-delete-{{ $products-> id }}"
                               class="btn btn-danger btn-delete">Delete
                            </a>
                        </form>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>

        {{--            <div class="row">--}}
        <div class="form-group mr-3">
            <select class=" mr-2 " id="select-action">
                <option>Delete</option>
                <option>Accept</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger btn-xs delete-all mb-2">Apply to all</button>
            {{--                </div>--}}

        </div>


    </div>

    <div class="row">
        <div class="col-sm-6 col-md-5"></div>
        <div class="col-sm-6 col-md-4">
            <nav aria-label="Page navigation example">
                {{$product->links()}}

            </nav>
        </div>
    </div>


@endsection
