<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostinganController extends Controller
{
   public function index()  {
        $data = Post::all();
        return view ('postingan/index', ['data' => $data]);
    }

    public function create(){
        return view('postingan/create');
    }

    public function store(Request $request){

        Session::flash('category_id', $request->category_id);
        Session::flash('title', $request->title);
        Session::flash('excerpt', $request->excerpt);
        Session::flash('body', $request->body);

        $request-> validate([
            'category_id'=> 'required',
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required',

        ], [
            'category_id.required' => 'ID Kategori tidak boleh kosong',
            'title.required' => 'Judul tidak boleh kosong',
            'excerpt.required' => 'Excerpt tidak boleh kosong',
            'body.required' => 'Body tidak boleh kosong',
        ]);

        $data = [
            'category_id' => $request-> category_id,
            'title' => $request-> title,
            'excerpt' => $request-> excerpt,
            'body' => $request-> body,
        ];
        Post::create($data);
        return redirect()-> to ('postingan')-> with('Success, berhasil membuat data');
    }
}



