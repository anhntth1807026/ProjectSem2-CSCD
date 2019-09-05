<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductValidation;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use JD\Cloudder\Facades\Cloudder;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
//        $user = Auth::user();
//        if ($userer ->hasRole('admin')){
        $product = Product::latest()->paginate(5);

        return view('admin.product.index')
            ->with('product', $product);
//        } else {
//            return 'You are nO dOOr...';
//        }

    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(ProductValidation $request)
    {
        $request->validated();

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
        return view('admin.product.show')->with('product', $product);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit')->with('product', $product);
    }

    public function update(ProductValidation $request, $id)
    {
        $product = Product::find($id);
        $request->validated(

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

//    public function destroyMultiple(Request $request)
//    {
//        Product::whereIn('id', $request->get('ids'))->delete();
//        return response()->json(['status' => true, 'message' => "Product deleted successfully"]);
////        return back();
//    }
}
