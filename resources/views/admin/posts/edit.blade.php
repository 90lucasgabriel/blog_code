@extends('template')

@section('content')
	{!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}
		@include('admin.posts._form');
		<div class="form-group">
			{!! Form::submit('Save Post', null, ['class'=>'btn']) !!}
		</div>
	{!! Form::close() !!}
@endsection