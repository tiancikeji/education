<?php

class Message extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'body' => 'required',
		'is_read' => 'required',
		'user_id' => 'required'
	);
}
