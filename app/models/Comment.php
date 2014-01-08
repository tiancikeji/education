<?php

class Comment extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required',
		'content' => 'required',
		'video_id' => 'required'
	);
}
