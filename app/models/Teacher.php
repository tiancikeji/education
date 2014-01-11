<?php

class Teacher extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'username' => 'required',
		'password' => 'required'
	);
}
