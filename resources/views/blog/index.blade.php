@extends('template')

@section('content')


<div class="col-sm-8">
	<h1>Blog</h1>
	@foreach($posts as $post)
	<div class="col-xs-12"  style="margin-bottom: 30px; background: white; box-shadow: 0 3px 1px -2px rgba(0,0,0,.14),0 2px 2px 0 rgba(0,0,0,.098),0 1px 5px 0 rgba(0,0,0,.084)">
		<h3><a href="{{route('posts.view',['id'=>$post->id])}}">{{$post->title}}</a></h3>
		<p>{{$post->content}}</p>
		<div class="clearfix"></div>
	</div>


	@endforeach
	{!! $posts->render() !!}
</div>
@endsection
