<?php

class PostsController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post;

	    Log::info('User entered a blog.', Input::all());

		return $this->validatorSave($post);

	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
			$post = Post::findOrFail($id);
		} catch(Exception $e) {
			App::abort(404);
		}

		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try {
			$post = Post::findOrFail($id);
		} catch(Exception $e) {
			App::abort(404);
		}

		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		Log::info('User edited a blog.', Input::all());

		return $this->validatorSave($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);

		if(!$post) {
			App::abort(404);
		}

		$post->delete();

		Log::info('Post deleted successfully');
		
		Session::flash('successMessage', 'Post deleted successfully.');

		return Redirect::action('PostsController@index');
	}

	/**
	*
	* Way to refactor update and store to use the same validator and save options
	*
	**/
	public function validatorSave(Post $post) {

		$message = "Your post was successfully saved.";

		$validator = Validator::make(Input::all(), Post::$rules);

		// attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::action('PostsController@create')->withErrors($validator)->withInput();
	    } else {
	        // validation succeeded, create and save the post
			$post->title = Input::get('title');
			$post->body  = Input::get('body');
	    	$post->save();

			Session::flash('successMessage', $message);

			return Redirect::action('PostsController@index');

	    }

	}



}
