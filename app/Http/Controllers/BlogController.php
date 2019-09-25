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
}