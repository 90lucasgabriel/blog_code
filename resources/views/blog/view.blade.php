@extends('template')

@section('content')
	<div class="col-sm-8" style="margin-bottom: 30px; background: white; box-shadow: 0 3px 1px -2px rgba(0,0,0,.14),0 2px 2px 0 rgba(0,0,0,.098),0 1px 5px 0 rgba(0,0,0,.084)">
		<h3>{{$post->title}}</h3>
		<p>{{$post->content}}</p>

	
		<hr>
		<h4>Comentários: </h4>
		@foreach($post->comments as $comment)
		<div class='col-sm-12'>
			<p>Name: {{$comment->name}}</p>
			<p>Email: {{$comment->email}}</p>
			<p>Comment: {{$comment->comment}}</p>

			<hr/>
		</div>

		@endforeach

	</div>
	<div class="col-sm-3 pull-right" style="padding: 10px; margin-bottom: 30px; background: white; box-shadow: 0 3px 1px -2px rgba(0,0,0,.14),0 2px 2px 0 rgba(0,0,0,.098),0 1px 5px 0 rgba(0,0,0,.084)">
		<h4>Tags: </h4>
		@foreach($post->tags as $tag)
		{{$tag->name}} |
		@endforeach
	</div>
@endsection