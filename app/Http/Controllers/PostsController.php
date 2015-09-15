<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;


class PostsController extends Controller
{
    public function index(){
    	//$posts = $this->post->all();
    	//return $posts;
    	$posts = Post::all();
    	return view('blog.index', compact('posts'));
    }
}
