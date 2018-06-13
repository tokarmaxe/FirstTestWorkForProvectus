<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PostsController extends Controller
{
    public function index()
    {
        $categories = App\Posts::all();
        return view('categoriesList',compact('categories'));
    }
}
