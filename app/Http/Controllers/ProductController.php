<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = Auth::user();
//        if ($user ->hasRole('admin')){
        $product = Product::latest()->paginate(5);

        return view('admin.index')
            ->with('product', $product);
//        } else {
//            return 'You are nO dOOr...';
//        }

    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
//        $request->validated();


//        $game =Game::create($request->all());
        $obj = new Product();
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');


//        \Log::info($obj);

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
        $obj->quantity = $request->get('quantity');
        $obj->price = $request->get('price');

        $obj->save();

//        return response()->json(['status' => 'success']);
        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.show')->with('product', $product);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit')->with('product', $product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validated(
//            [
//                'name' => 'required',
//                'category' => 'required',
//                'thumbnail' => 'required',
//                'price' => 'required',
//            ]
        );

        $product->update($request->all());
        return response()->json(['status' => true, 'message' => "Product updated successfully"]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json(['status' => true, 'message' => "Product deleted successfully"]);
    }

    public function destroyMultiple(Request $request)
    {
        Product::whereIn('id', $request->get('ids'))->delete();
        return response()->json(['status' => true, 'message' => "Product deleted successfully"]);
//        return back();
    }
}
