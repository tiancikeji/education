<?php

class Word extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'english' => 'required',
		'chinese' => 'required'
	);
}
