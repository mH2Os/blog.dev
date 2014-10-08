<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    public static $rules = [
	    'title'      => 'required|max:100',
	    'body'       => 'required'
	];
}

?>