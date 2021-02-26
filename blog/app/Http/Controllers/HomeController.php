<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
class HomeController extends Controller
{
    public function index()
    {
        // funcao para pulicar post e ordenar
        $Posts = Post::orderBy ('created_at','desc')->get();
        return view('home', compact('Posts'));
    }
    public function post($slug){
        $post = Post::where ('slug', '=', $slug)->firstOrFail();
        return view('post', compact('post'));
    }

}
