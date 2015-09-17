@extends('template')

@section('content')
	{!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}
		

		@include('admin.posts._form')
		<div class="form-group">
			{!! Form::submit('Create Post', null, ['class'=>'btn']) !!}
		</div>
	{!! Form::close() !!}
@endsection