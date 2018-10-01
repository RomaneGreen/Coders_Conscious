<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class DashboardController extends Controller{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(10);
        return view('dashboard', ['posts' => $posts]);

    }
    public function getPostForm() {
        return view('post.post_form');
}
public function createPost(Request $request){
    $post = Post::create(array(
        'title' => Input::get('title'),
        'description' => Input::get('description'),
        'author' => Auth::user()->id
    ));
    return redirect()->route('dashboard')->with('success', 'Post has been successfully added!');
}

}
