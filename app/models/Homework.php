<?php

class Homework extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required'
	);
}
