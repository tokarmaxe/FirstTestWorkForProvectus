<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Posts;

class PostsController extends Controller
{
    //Start page of posts
    public function index()
    {
        $posts = Posts::all();
        //header('Content-Type: application/json');
        //echo json_encode($posts);
        return view('posts.posts',['posts'=>$posts]);
    }
    //function to show post with id $id
    public function show($id)
    {
        $post = Posts::all()->find($id);
        //header('Content-Type: application/json');
        //echo json_encode($post);
        return view('posts.show',['post'=>$post]);
    }
    //function to redirect to posts.create page
    public function create()
    {
        return view('posts.create');
    }
    //function to create new post
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
    //function to get post with id $id,
    //and redirect to posts.edit page
    public function edit($id)
    {
        $post = Posts::all()->find($id);

        return view('posts.edit',['post'=>$post]);
    }
    //function to edit category with id $id
    public function update(Request $request, $id)
    {
        $post = Posts::all()->find($id);
        $post -> name =$request->get('postname');
        $post -> description = $request->get('description');
        $post -> category_id = $request->get('category_id');
        $post -> save();

        return redirect()->route('posts.index');
    }
    //function to delete post with id $id
    public function destroy($id)
    {
        $post = Posts::all()->find($id)->delete();
        return redirect()->route('posts.index');
    }
}
