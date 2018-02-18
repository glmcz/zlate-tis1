<?php
/**
 * Created by PhpStorm.
 * User: Glm
 * Date: 17.02.2018
 * Time: 12:59
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller {

    public function index()
    {
        $posts = Post::paginate(5);
        return view('index.index',compact('posts'));
    }
}