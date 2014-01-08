<?php

class Exercise extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'no' => 'required',
		'description' => 'required',
		'paper_id' => 'required'
	);
}
