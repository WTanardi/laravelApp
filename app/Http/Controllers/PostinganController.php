<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostinganController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return view("postingan/index", ["data" => $data]);
    }

    public function create()
    {
        return view("postingan/create");
    }

    public function store(Request $request)
    {
        $data = [
            "category_id" => $request->category_id,
            "title" => $request->title,
            "excerpt" => $request->excerpt,
            "body" => $request->body,
        ];
        Post::create($data);
        return view("postingan/index");
    }
}
