<?php

namespace App\Http\Controllers;

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post) //インポートしたPostをインスタンス化して$postとして使用。
    {

        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(3)]);
        //getPaginateByLimit()はPost.phpで定義したメソッドです。
    }
}
