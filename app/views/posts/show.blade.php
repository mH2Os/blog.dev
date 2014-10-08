@extends ('layouts.master')

@section('content')

<div>

	<h2>Blog Posts</h2>

	<h3>Title: {{{ $post->title }}}</h3>
	<p>Body: {{{ $post->body }}}</p>

</div>

@stop