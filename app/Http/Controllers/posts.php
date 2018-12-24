<?php

namespace App\Http\Controllers;

use App\post;
use DB;
use Illuminate\Http\Request;

class posts extends Controller
{
    public function getPosts(){

    $posts = Post::latest()->get();

    return view('home', compact('posts'));

    }

    //single post

    public function singlePost(Post $id){

       //$post = DB::table('posts')->find($id);

       return view('post');
}


    //admin finction

    public function admin(){

        return view('admin');
    }

    // add post function

    public function store(Request $request){


        //$this->validate(request,[

         //  'title' => 'required',
           // 'body' => 'required'

     //   ]);

        //$img_name = time();

        $post = new  Post;

        $post->title = request('title');

        $post->body = request('body');

        //$post->img = $img_name;

        $post->save();

        //$request->img->move(public_path('upload'), $img_name);

        return redirect('/posts');


    }
}
