<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// use Illuminate\Foundation\Validation\ValidatesRequest;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequest;
use Illuminate\Http\Request;
// use DB;

use App\Post;


class PostController extends Controller
{
    //

    public function index() 
    {

        $post = Post::all();

        return view('post.show')->with('post', $post);
    }

    public function create() 
    {        
        return view('post.new');
    }

    public function store(Request $request)
    {
        $model = new Post();
        $model->title = $request->input('title');
        $model->description = $request->input('description');
        $model->save();

        return redirect()->route('new');
    }

    public function edit($id)
    {
        $model = Post::find($id);

        return view('post.edit')->with('post', $model);
    }

    public function update($id)
    {

        $model = Post::find($id);
        $model->title = $request->input('title');
        $model->description = $request->input('description');
        $model->save();

        return redirect()->route('new');
    }

    public function categories()
    {
        return view('post.category');
    }

    public function tags()
    {
        return view('post.tags');
    }
}
