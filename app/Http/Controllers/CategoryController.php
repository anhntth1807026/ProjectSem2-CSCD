<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::latest()->paginate(10);

        return view('admin.category.index')
            ->with('category', $category);

    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $obj = new Category();
        $obj->name = $request->get('name');

        $obj->save();

        return redirect()->route('category.index')
            ->with('success', 'Category created successfully.');
    }


    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.category.show')->with('category', $category);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
//        $request->validated();

        $category->update($request->all());
        return response()->json(['status' => true, 'message' => "Category updated successfully"]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return response()->json(['status' => true, 'message' => "Category deleted successfully"]);
    }
    public function destroyMultiple(Request $request)
    {
        Category::destroy(Input::get('ids'));
        return Input::get('ids');
    }
}
