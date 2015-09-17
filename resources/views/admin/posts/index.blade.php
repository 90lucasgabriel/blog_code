@extends('template')

@section('content')
	<div class="col-sm-12 padding">
		<a href="{{route('admin.posts.create')}}" class="btn btn-primary">New Post</a>
	</div>
	<div class="col-sm-12" style="margin-bottom: 30px; background: white; box-shadow: 0 3px 1px -2px rgba(0,0,0,.14),0 2px 2px 0 rgba(0,0,0,.098),0 1px 5px 0 rgba(0,0,0,.084)">
		<table class="table table-hover">
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Action</th>
			</tr>

			@foreach($posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					<td>{{$post->title}}</td>
					<td>
						<a href="{{route('admin.posts.edit', ['id' => $post->id])}}">Edit</a>
						<a href="{{route('admin.posts.destroy', ['id' => $post->id])}}">Delete</a>
					</td>
				</tr>
			@endforeach
		</table>
		{!! $posts->render() !!}
	</div>
@endsection