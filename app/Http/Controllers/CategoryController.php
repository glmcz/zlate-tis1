<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class CategoryController extends Controller
{
    public function index($id)
    {
//        $odata = Invoice::yesterdaysOrderDetails($from, $to)->get();
        $postCat = Post::category($id)->get();


        return view('pages.psychologie',compact('postCat'));
    }

    public function post( $id)
    {
        $postCat = Post::where('id',$id)->get();



        return view('pages.psychologie',compact('postCat'));
    }
}
