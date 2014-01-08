<?php

class Myword extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'word_id' => 'required',
		'user_id' => 'required'
	);
}
