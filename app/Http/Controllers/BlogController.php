<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   function index(){
       $blog = Article::paginate(3);
       $viewData = [
           'blog' => $blog,
       ];
       return view('client.home', $viewData);
   }
   // Chỗ này hiển thị trong trang blog chính
    function index_In_Blog(){
        $blog = Article::paginate(3);
        $viewData = [
            'blog' => $blog,
        ];
        return view('client.blog', $viewData);
    }
    //  Chỗ này hiển thị blog chi tiết
    public function blogDetail( $id){
        $blogDetail = Article::find($id);

        $data = [
            'blogDetail' => $blogDetail,
        ];
        return view('client.blog.blogDetail', $data);
    }
}
