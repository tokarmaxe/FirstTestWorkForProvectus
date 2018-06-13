<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App;
use App\Category;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = App\Category::all();
        return view('categories',compact('categories'));
    }
    public function getCategoryList()
    {
        $categories = App\Category::all();
        return view('getCategoryList',compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'categoryname' => 'required|min:4'
        ]);
        $category = new Category;
        $category -> name = $request->get('categoryname');
        $category->save();
        return redirect()->route('categories.index');
    }
    public function edit($id)
    {
        $category = Category::all()->find($id);

        return view('categories.edit',['category'=>$category]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'categoryname'=>'required|min:4'
        ]);

        $category = Category::all()->find($id);
        $category -> name = $request->get('categoryname');
        $category->save();

        return redirect()->route('categories.index');
    }
    public function show($id)
    {
        $category = Category::all()->find($id);

        return view('categories.show',['category'=>$category]);
    }
}
