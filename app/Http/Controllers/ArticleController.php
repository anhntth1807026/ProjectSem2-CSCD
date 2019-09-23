<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use JD\Cloudder\Facades\Cloudder;

class ArticleController extends Controller
{

    public function index()
    {
        $article = Article::with('users:id,name')->paginate(6);

        return view('admin.article.index')
            ->with('article', $article);
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
//        $request->validated();

        $obj = new Article();
        $obj->title = $request->get('title');

        $image_urls = '';

        try {
            if ($request->hasFile('thumbnail')) {
                foreach ($request->file('thumbnail') as $image) {
                    $thumbnail = $image->getRealPath();

                    Cloudder::upload($thumbnail, null);
                    list($width, $height) = getimagesize($thumbnail);
                    $image_url = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height" => $height]);
                    $image_urls .= '@' . $image_url;
                }
            } else {
                $obj->thumbnail = "link ảnh default";
            }

        } catch (ValidationException $e) {
            return response()->json(['loi' => `Loi ${$e}`]);
        }
        $obj->thumbnail = substr($image_urls, 1);
        $obj->description = $request->get('description');
        $obj->detail = $request->get('detail');

        $obj->save();

//        return response()->json(['status' => 'success']);
        return redirect()->route('article.index')
            ->with('success', 'Article created successfully.');
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('admin.article.show')->with('article', $article);
    }

    public function edit($id)
    {
        $article = Article::find($id);
        $data =['article' => $article];
        return view('admin.article.edit', $data)->with('article', $article);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
//        $request->validated();

//        $product->update($request->all());

        $article->title = $request->get('title');


        $image_urls = '';

        try {
            if ($request->hasFile('thumbnail')) {
                foreach ($request->file('thumbnail') as $image) {
                    $thumbnail = $image->getRealPath();

                    Cloudder::upload($thumbnail, null);
                    list($width, $height) = getimagesize($thumbnail);
                    $image_url = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height" => $height]);
                    $image_urls .= '@' . $image_url;
                }
            } else {
                $article->thumbnail = "link ảnh default";
            }

        } catch (ValidationException $e) {
            return response()->json(['loi' => `Loi ${$e}`]);
        }
        $article->thumbnail = substr($image_urls, 1);
        $article->description = $request->get('description');;
        $article->detail = $request->get('detail');;

        $article->save();
        return redirect()->route('article.index')
            ->with('success', 'Article updated successfully');
//        return response()->json(['status' => true, 'message' => "Product updated successfully"]);
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return response()->json(['status' => true, 'message' => "Article deleted successfully"]);
    }

}
