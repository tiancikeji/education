<?php

class Myword extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required'
	);
}
