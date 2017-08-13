<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
    public function index()
    {
        $posts=Post::LastThree()->get();
        //dd($posts);
        return view('pages.index')->with('posts',$posts);
    }
}
