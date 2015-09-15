@extends('template')

@section('content')
	

	<div class="col-sm-8">
	<h1>Blog</h1>
		@foreach($posts as $post)
			<div class="col-xs-12"  style="margin-bottom: 30px; background: white; box-shadow: 0 3px 1px -2px rgba(0,0,0,.14),0 2px 2px 0 rgba(0,0,0,.098),0 1px 5px 0 rgba(0,0,0,.084)">
				<h3>{{$post->title}}</h3>
				<p>{{$post->content}}</p>
				
				
				@foreach($post->comments as $comment)
					<div class='col-sm-12'>
						<hr/>
						<p>Name: {{$comment->name}}</p>
						<p>Email: {{$comment->email}}</p>
						<p>Comment: {{$comment->comment}}</p>
					</div>

				@endforeach

				<div class="clearfix"></div>
			</div>

		@endforeach
	</div>
@endsection