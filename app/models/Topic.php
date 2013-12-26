<?php

class Topic extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'author' => 'required',
		'titile' => 'required',
		'pic_url' => 'required',
		'type' => 'required',
		'status' => 'required',
		'body' => 'required'
	);
}
