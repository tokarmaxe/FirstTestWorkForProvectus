<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App;
use App\Category;
use App\Posts;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    //Start page of categories
    public function index()
    {
        $categories = App\Category::all();
        //header('Content-Type: application/json');
        //echo "JSON"."<br>";
        //echo json_encode($categories);
        return view('categories',compact('categories'));
    }
    //function redirect to categories.create page
    public function create()
    {
        return view('categories.create');
    }
    //function to create new category
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
    //function to get editing category with id $id,
    //and redirect to categories.edit page
    public function edit($id)
    {
        $category = Category::all()->find($id);

        return view('categories.edit',['category'=>$category]);
    }
    //function to edit category with id $id
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
    //function to show category, and posts in that category
    public function show($id)
    {
        $category = Category::all()->find($id);
        $posts = Posts::query()->where('category_id',$id)->get();
        //header('Content-Type: application/json');
        //echo "JSON"."<br>";
        //$array = [$category,$posts];
        //echo json_encode($array);

        return view('categories.show',['category'=>$category,'posts'=>$posts]);
    }
    //function to delete category
    public function destroy($id)
    {
        $category = Category::all()->find($id)->delete();
        return redirect()->route('categories.index');
    }
}
