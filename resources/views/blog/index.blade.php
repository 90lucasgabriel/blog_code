@extends('template')

@section('content')
	<h1>Blog</h1>

	@foreach($posts as $post)
		<h3>{{$post->title}}</h3>
		<p>{{$post->content}}</p>
		<hr/>
	@endforeach
@endsection