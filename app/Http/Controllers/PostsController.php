<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();

        return view('posts.posts',['posts'=>$posts]);
    }
    public function show($id)
    {
        $post = Posts::all()->find($id);

        return view('posts.show',['post'=>$post]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'postname'=>'required|min:4',
            'description'=>'required|min:4'
            //'category_id'=>'required|min:4'
        ]);
        $post = new Posts;
        $post -> name =$request->get('postname');
        $post -> description = $request->get('description');
        $post -> category_id = $request->get('category_id');
        $post->save();
        return redirect()->route('posts.index');
    }
    public function edit($id)
    {
        $post = Posts::all()->find($id);

        return view('posts.edit',['post'=>$post]);
    }
    public function update(Request $request, $id)
    {
        $post = Posts::all()->find($id);
        $post -> name =$request->get('postname');
        $post -> description = $request->get('description');
        $post -> category_id = $request->get('category_id');
        $post -> save();

        return redirect()->route('posts.index');
    }
    public function destroy($id)
    {
        $post = Posts::all()->find($id)->delete();
        return redirect()->route('posts.index');
    }
}
