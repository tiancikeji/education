<?php

class Point extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'no' => 'required',
		'content' => 'required',
		'paper_id' => 'required'
	);
}
