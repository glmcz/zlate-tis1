<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
//    public function index()
//    {
//        $posts = Post::paginate(5);
//        return view('index.index',compact('posts'));
//    }
    public function index()
    {
        $posts = Post::paginate(5);
        $categories = Category::all();
        return view('index.index',compact('posts','categories'));
    }



    public function post( Post $post)
    {
        return view('posts.post', compact('post'));
////        $titles = DB::table('categories')->pluck('name');
////        $aa = (array)$titles;
////        $myarray = array_shift($aa);
////        var_dump($myarray);
    }
}
