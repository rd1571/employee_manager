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

        return view('post.show', [
            'data' => $post
        ]);
    }

    public function create() 
    {        
        return view('post.new');
    }

    public function store(Request $request)
    {
        // $data = [
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ];

        // $model = new Post();

        // if ($request->isMethod('post')) {

        //     Post::create($data);

        //     return redirect('/post/all');

        //     //var_dump($model);exit;
        //     //DB::table('post')->insert($data);
        // }

        // $this->validate();

        $model = new Post();
        $model->title = $request->input('title');
        $model->description = $request->input('description');
        
        return $model->save();
    }

    public function edit($id)
    {
        
        // $post = Post::find($id);

        return view('post.edit');
    }

    public function update($id)
    {

        $model = Post::find($id);
        $model->title = $request->input('title');
        $model->description = $request->input('description');
        
        return $model->save();
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
