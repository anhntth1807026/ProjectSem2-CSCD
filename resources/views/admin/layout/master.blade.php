<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/my-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/sb-admin.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <title>Admin - Dashboard</title>

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger"></span>
            </a>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->

            </ul>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <ul class="restrain language">

                    @if(Auth::check())

                        <a href="{{ route('admin.login') }}">
                            {{ __('Login') }}
                        </a>

                    @else

                        <a href="{{ route('admin.logout') }}">
                            {{ __('Logout') }}
                        </a>

                    @endif

                </ul>

            </div>

        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin/dashboard">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item dropdown">
            <div class="dropdown-btn nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-fw fa-table"></i>
                <span>Quản lý</span>
            </div>
            <div class="dropdown-container">
                <a class="dropdown-item" href="{{ route('admin.get.user') }}"><i class="fas fa-user"></i>
                    Thành viên</a>
                <a class="dropdown-item" href="{{route('category.index')}}"><i class="fas fa-archive"></i>
                    Danh mục</a>
                <a class="dropdown-item" href="{{route('product.index')}}"><i class="fab fa-product-hunt"></i>
                    Sản phẩm</a>
                <a class="dropdown-item" href="{{route('admin.list.rating')}}"><i class="fab fa-product-hunt"></i>
                    Đánh giá</a>
                <a class="dropdown-item" href="{{route('article.index')}}"><i class="fab fa-product-hunt"></i>
                    Bài viết</a>
                <a class="dropdown-item" href="{{route('admin.list.transaction')}}"><i class="fab fa-product-hunt"></i>
                    Đơn Hàng</a>
                <a class="dropdown-item" href="{{route('admin.contact')}}"><i class="fab fa-product-hunt"></i>
                    Liên hệ</a>
            </div>
        </li>

    </ul>

    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                @section('content')
                @show()
            </div>
        </div>
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/sb-admin.min.js')}}"></script>
<script src="{{asset('js/myChart.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{asset('js/chart.js/dist/Chart.bundle.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>

</html>
