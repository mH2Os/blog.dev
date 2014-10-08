@extends ('layouts.master')

@section('content')

<div>
	{{ Form::open(array('action' => 'PostsController@store')) }}

	{{ Form::label('title', 'Title: ') }}
	<br>
	{{ Form::text('title') }}

	<br>

	{{ Form::label('body', 'Body: ') }}
	<br>
	{{ Form::textarea('body') }}

	<br>
	
	{{ Form::submit('Post') }}

	{{ Form::close() }}
</div>

@stop