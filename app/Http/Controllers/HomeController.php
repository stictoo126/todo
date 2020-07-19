<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);
        $data = [
            'posts' => $posts
        ];
        return view('home',$data);
    }
    public function login()
    {
        return view('login');
    }
    public function create()
    {
        $cagories = Category::all();
        $data = [
            'categories' => $cagories
        ];
        return view('create', $data);
    }
    public function store(Request $request){
        $detail = $request->input('detail');
        $category_id = $request->input('category_id');
        $post = new Post();
        $post->user_id =1;
        $post->status =0;
        $post->detail = $detail;
        $post->category_id = $category_id;
        $post->save();

        return redirect('/');

    }
    public function delete($id){
        if($id == ""){
            return redirect('/');
        }

        $post = Post::find($id);
        $post->delete();

        return redirect('/');
    }
}
