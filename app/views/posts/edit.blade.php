@extends('layouts.master')

@section('page-head')

@stop

@section('content')
	{{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method' => 'put')) }}
		
	{{ Form::label('title', 'Title: ') }}
	<br>
	{{ Form::text('title') }}
	<br>


	{{ Form::label('body', 'Body: ') }}
	<br>
	{{ Form::textarea('body') }}

		<div>
			<div>
				{{ Form::submit('Edit') }}
			</div>
		</div>

	{{ Form::close() }}	
@stop