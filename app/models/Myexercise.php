<?php

class Myexercise extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user_id' => 'required',
		'exercise_id' => 'required'
	);
}
