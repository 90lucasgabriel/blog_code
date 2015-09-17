<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsAdminController extends Controller
{
	private $post;
	public function __construct(Post $post){
		$this->post = $post;
	}

	public function index(){
		$posts = $this->post->paginate(10);
		return view('admin.posts.index', compact('posts'));
	}



	public function create(){
		return view('admin.posts.create');
	}

	public function store(PostRequest $request){
		$this->post->create($request->all());
		return redirect()->route('admin.posts');
	}



	public function edit($id){
		$post = $this->post->find($id);
		return view('admin.posts.edit', compact('post'));
	}

	public function update($id, PostsRequest $request){
		$this->post->find($id)->update($request->all());
		return redirect()->route('admin.posts');
	}


	public function destroy($id){
		$this->post->find($id)->delete();
		return redirect()->route('admin.posts');
	}
}
