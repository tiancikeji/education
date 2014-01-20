<?php

class Plan extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'days' => 'required'
	);
}
