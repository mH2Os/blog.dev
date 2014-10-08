@extends ('layouts.master')

@section('content')

<div>
	<h2>Blog Posts</h2>

	<br>

@foreach($posts as $post)

	<h4><a href="{{{ action('PostsController@show', $post->id) }}}" id="a_title">{{{ $post->title }}}</a></h4>
	<h4>{{{ $post->body }}}</h4>
	<p>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}} </p>
	<br>
	<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a>
	<br>

@endforeach

	{{ $posts->links() }}

</div>

@stop