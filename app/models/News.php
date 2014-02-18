<?php

class News extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		// 'author' => 'required',
		// 'published_date' => 'required',
		'body' => 'required',
		'title' => 'required'
	);
}
