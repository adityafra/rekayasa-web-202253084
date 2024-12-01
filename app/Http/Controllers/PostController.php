<?php
// 202253084
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Data Post",
            "posts" => Post::all()
        ]);
    }
    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "posts" => Post::find($slug)
        ]);
    }
}
