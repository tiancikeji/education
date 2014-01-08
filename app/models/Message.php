<?php

class Message extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'body' => 'required',
		'is_read' => 'required',
		'type' => 'required',
		'user_id' => 'required'
	);
}
